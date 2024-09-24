<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskCreateRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{
   public function index(){
    return view('task.index');
   }

   public function addTask()  {
    $form_route =route('task.store');
    return view('task.form',compact('form_route'));
   }

   public function edit(Task $task){
    $form_route = route('task.update',[$task]);
    return view('task.form',compact('task','form_route'));
   }

   public function store(TaskCreateRequest $taskCreateRequest){
    try {
        DB::beginTransaction();
        $task_inputs = $taskCreateRequest->only('title','start_time','end_time','description','image');
       $task = Task::create($task_inputs);
       if($taskCreateRequest->hasFile('image')){
        [$inputs['image'], $inputs['thumbnail']] = createThumbnail($taskCreateRequest->file('image'));
        $task->media()->create($inputs);
       }
       
       DB::commit();
       return redirect()->route('task')->with('success','New Task Added Successfully');

        
    } catch (\Exception $e) {
        Log::error($e);
        return back()->with('error',$e->getMessage());
    }
   }
   public function update(Task $task,Request $request){
    try {
        DB::beginTransaction();
        $task_inputs = $request->only('title','start_time','end_time','description','image');
        $task->update($task_inputs);
       if($request->hasFile('image')){
         if($task->media){
             deleteImage($task);
         }
            [$inputs['image'], $inputs['thumbnail']] = createThumbnail($request->file('image'));
            $task->media()->create($inputs);
       }
       DB::commit();
       return redirect()->route('task')->with('success','Task updated successfully');

        
    } catch (\Exception $e) {
        Log::error($e);
        return back()->with('error',$e->getMessage());
    }
   }



   public function delete(Task $task,Request $request){
    try {
        if($request->ajax()){
            DB::beginTransaction();
            if($task->media){
                deleteImage($task);
            }
            $task->delete();
            DB::commit();
            return response()->json([
                'message'=>'Task deleted successfully'
            ]);
        }

    } catch (\Exception $e) {
        Log::error($e);
        DB::rollBack();
        return response()->json([
            'message'=>$e->getMessage(),
        ],$e->getCode());
    }
   }


   public function completeTask(Task $task,Request $request){
    try {

        DB::beginTransaction();
        if($request->ajax()){
            $task->update([
                'completed_time'=>$request->completed_time,
                'status'=>1
            ]);
        DB::commit();
        return response()->json([
            'message'=>'Task completed successfully'
        ]);
        }
    } catch (\Exception $e) {
        Log::error($e);
        DB::rollBack();
        return response()->json([
            'message'=>$e->getMessage(),
        ],$e->getCode());

    }
  
   }

   public function uncompleteTask(Task $task)  {
    try {
        $task->update([
            'status'=>0,
            'completed_time'=>null
        ]);
        return response()->json([
           'message'=>'Task uncompleted successfully'
        ]);

    } catch (\Exception $e) {
        Log::error($e);
        return response()->json([
           'message'=>$e->getMessage(),
        ],$e->getCode());
    }
   }

   public function view(Task $task){
    return view('task.view',compact('task'));
   }


   public function list(Request $request){
      if($request->ajax()){
          $_order = request('order');
          $_columns = request('columns');
        //   dd($_columns[$_order[0]['column']]['name']);
          $order_by = $_columns[$_order[0]['column']]['name'];
          $order_dir = $_order[0]['dir'];
          $search = request('search');
          $skip = request('start');
          $take = request('length');

          $query = Task::query();
          if (isset($search['value'])) {
              $query->where('title', 'like', '%' . $search['value'] . '%');
          };

          $data = $query->orderBy($order_by, $order_dir)->skip($skip)->take($take)->get();
          $recordsTotal = $query->count();

          $recordsFiltered = $query->count();
          $i=1;
          foreach ($data as $d) {
              $d->index_column =$i;
              $d->status = $d->task_status;
              $i++;
              $d->start_time = $d->start_date;
              $d->end_time = $d->end_date;
              $d->action =view('task.action',compact('d'))->render();

          }

          return [
              "draw" => request('draw'),
              "recordsTotal" => $recordsTotal,
              'recordsFiltered' => $recordsFiltered,
              "data" => $data,
          ];
      
  
}
   }
}
