<?php

namespace App\Http\Controllers;

use App\Models\LastSheetSyncking;
use App\Models\TaskCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TaskCategoryController extends Controller
{

    private function getTaskCategoryActivityTime()
    {
        $last_sheet_syncking = LastSheetSyncking::where('slug', 'task_categories')->first();
        $last_task_category_upload_time =  getLastActivityTime($last_sheet_syncking->last_upload_time);
        $last_task_category_sync_time = getLastActivityTime($last_sheet_syncking->last_sync_time);
        return [$last_task_category_upload_time, $last_task_category_sync_time];
    }

    public function index()
    {
        [$last_task_category_upload_time, $last_task_category_sync_time] = $this->getTaskCategoryActivityTime();
        return view('task-category.index', compact('last_task_category_upload_time', 'last_task_category_sync_time'));
    }

    public function add()
    {
        return view('task-category.add');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $_order = request('order');
            $_columns = request('columns');
            //   dd($_columns[$_order[0]['column']]['name']);
            $order_by = $_columns[$_order[0]['column']]['name'];
            $order_dir = $_order[0]['dir'];
            $search = request('search');
            $skip = request('start');
            $take = request('length');

            $query = TaskCategory::query();
            if (isset($search['value'])) {
                $query->where('name', 'like', '%' . $search['value'] . '%');
            };

            $data = $query->orderBy($order_by, $order_dir)->skip($skip)->take($take)->get();
            $recordsTotal = $query->count();

            $recordsFiltered = $query->count();
            $i = 1;
            foreach ($data as $d) {
                $d->index_column = $i;
                $pending_task = $d->tasks()->where('status', false)->count();
                $completed_task = $d->tasks()->where('status', true)->count();
                $total_task = $pending_task + $completed_task;
                $d->task = "<span class='badge badge-info'>All:{$total_task}</span>
                    <span class='badge badge-warning text-white'>P: {$pending_task}</span>
                    <span class='badge badge-success text-white'>C: {$completed_task}</span>";
                $i++;
                $d->action = view('task-category.task-category-action', compact('d'))->render();
            }

            return [
                "draw" => request('draw'),
                "recordsTotal" => $recordsTotal,
                'recordsFiltered' => $recordsFiltered,
                "data" => $data,
            ];
        }
    }


    public function delete(TaskCategory $taskCategory, Request $request)
    {
        try {
            if ($request->ajax()) {
                DB::beginTransaction();

                $taskCategory->delete();
                DB::commit();
                return response()->json([
                    'message' => 'Task Category deleted successfully'
                ]);
            }
        } catch (\Exception $e) {
            Log::error($e);
            DB::rollBack();
            return response()->json([
                'message' => $e->getMessage(),
            ], $e->getCode());
        }
    }


    public function runPythonScript(Request $request)
    {
        try {
            if ($request->ajax()) {
                $input = $request->input('input'); // Get the input from the request
                $defaultDir = "cd /home/neeraj"; // Use the absolute path to your home directory
                $activateVenv = "source .venv/bin/activate";
                $changeDir = "cd Public/python/google_keep/read_write_excel";
                $runScript = "python3 task_category.py " . escapeshellarg($input); // Use python3 if needed

                // Combine the commands and run them with bash
                $command = "bash -c '$defaultDir && $activateVenv && $changeDir && $runScript'";
                // Log::alert($command);

                // Open the process using proc_open() for more control
                $process = proc_open(
                    $command,
                    [
                        1 => ['pipe', 'w'], // Standard output
                        2 => ['pipe', 'w'], // Standard error
                    ],
                    $pipes
                );

                // Check if the process was successfully opened
                if (is_resource($process)) {
                    // Read the output from the pipes
                    $output = stream_get_contents($pipes[1]);
                    $error = stream_get_contents($pipes[2]);

                    // Close the pipes
                    fclose($pipes[1]);
                    fclose($pipes[2]);

                    // Wait for the process to complete
                    $returnCode = proc_close($process);

                    // Log the output and error for debugging
                    Log::info("Python script output: " . $output);
                    Log::error("Python script error: " . $error);

                    // Check for errors
                    if ($returnCode !== 0) {
                        return response()->json(['error' => $error], 500);
                    }

                    $last_sync = LastSheetSyncking::query();
                    $current_time = Carbon::now();
                    if ($input == 'sync_task_categories') {
                        $last_sync->where('slug', 'task_categories')->update(['last_sync_time' => $current_time]);
                    } else if ($input == 'upload_task_categories') {
                        $last_sync->where('slug', 'task_categories')->update(['last_upload_time' => $current_time]);
                    }
                    [$last_task_category_upload_time, $last_task_category_sync_time] = $this->getTaskCategoryActivityTime();



                    // Return the output as a response
                    return response()->json([
                        'result' => $output,
                        'message' => 'Task Category Synchronized Success',
                        'updated_time' => [
                            'last_task_category_sync_time' => $last_task_category_sync_time,
                            'last_task_category_upload_time' => $last_task_category_upload_time
                        ]
                    ]);
                } else {
                    return response()->json(['error' => 'Failed to execute the command'], 500);
                }
            }
        } catch (\Exception $e) {
            Log::error("Exception: " . $e->getMessage());
            return response()->json(['error' => 'An error occurred while running the script'], 500);
        }
    }
}
