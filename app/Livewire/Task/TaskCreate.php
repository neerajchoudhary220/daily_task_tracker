<?php

namespace App\Livewire\Task;

use App\Models\Task;
use App\Models\TaskCategory;
use Illuminate\Http\Request;
use Livewire\Component;
use PDO;

class TaskCreate extends Component
{

    public $status;
    public $title;
    public $description;
    public $start_time;
    public $end_time;
    public $task_category_id;
    public $completed_time;

    public $task_category_list;

    public $task;

    public function mount(Request $request){
        if($request->id){
            $this->getTask($request->id);
        }
        $this->task_category_list = TaskCategory::get();
    }



    protected $rules =[
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'start_time' => 'required|date',
        'end_time' => 'required|date',
        'task_category_id' => 'required|exists:task_categories,id',
        'completed_time' => 'nullable|date',

    ];

    public function getTask($id){
        $task = Task::find($id);
        $this->task = $task;
        $this->title = $task->title;
        $this->description = $task->description;
        $this->start_time = $task->start_time;
        $this->end_time = $task->end_time;
        $this->task_category_id = $task->task_category_id;
        $this->completed_time = $task->completed_time;

    }

    public function updated($name,$value){
        // dd($name);
        $this->validate($this->rules);
    }

    public function save(){
        $validated_data = $this->validate($this->rules);
        if($this->task){
            $this->task->update($validated_data);
            return redirect()->route('task');
        }

        Task::create($validated_data);
        return redirect()->route('task');
    }

    public function resetForm(){
        $this->reset(['title', 'description','start_time','end_time','task_category_id','completed_time']);
    }



    public function render()
    {
        return view('livewire.task.task-create');
    }


}
