<?php

namespace App\Http\Controllers;

use App\Models\TaskCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TaskCategoryController extends Controller
{
    public function index(){
        return view('task-category.index');
    }

    public function add(){
        return view('task-category.add');
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
  
            $query = TaskCategory::query();
            if (isset($search['value'])) {
                $query->where('name', 'like', '%' . $search['value'] . '%');
            };
  
            $data = $query->orderBy($order_by, $order_dir)->skip($skip)->take($take)->get();
            $recordsTotal = $query->count();
  
            $recordsFiltered = $query->count();
            $i=1;
            foreach ($data as $d) {
                $d->index_column =$i;
                $pending_task = $d->tasks()->where('status',false)->count();
                $completed_task = $d->tasks()->where('status',true)->count();
                $total_task = $pending_task+$completed_task;
                $d->task = "<span class='badge badge-info'>All:{$total_task}</span>
                    <span class='badge badge-warning text-white'>P: {$pending_task}</span>
                    <span class='badge badge-success text-white'>C: {$completed_task}</span>";
                $i++;
                $d->action =view('task-category.task-category-action',compact('d'))->render();
  
            }
  
            return [
                "draw" => request('draw'),
                "recordsTotal" => $recordsTotal,
                'recordsFiltered' => $recordsFiltered,
                "data" => $data,
            ];
        
    
  }
     }


     public function delete(TaskCategory $taskCategory,Request $request){
        try {
            if($request->ajax()){
                DB::beginTransaction();
               
                $taskCategory->delete();
                DB::commit();
                return response()->json([
                    'message'=>'Task Category deleted successfully'
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
}
