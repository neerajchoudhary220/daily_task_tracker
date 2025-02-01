<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\TaskCategory as TaskCategoryModel;
use Illuminate\Http\Request;

class TaskCategory extends Component
{

    public $name;
    public $description;
    public $status;
    public $task_caetgory_id;
    public $task_category;


    public $rules =[
        'name' => 'required|max:255',
        'description' => 'nullable|max:255',

    ];

   


    public function mount(Request $request){

        if($request->id){
            $taskCategory = TaskCategoryModel::find($request->id);
            if($taskCategory){
                $this->name = $taskCategory->name;
                $this->description = $taskCategory->description;
                $this->status = $taskCategory->status;
                $this->task_caetgory_id;
                $this->task_category = $taskCategory;
            }
        }
     
    }

    public function render()
    {
        return view('livewire.task-category');
    }

    public function save(){
        $validated_data = $this->validate($this->rules);

        if($this->task_category){
            $this->task_category->update($validated_data);
        }else{
            TaskCategoryModel::create($validated_data);

        }

        return redirect()->route('task-category');
    }
}
