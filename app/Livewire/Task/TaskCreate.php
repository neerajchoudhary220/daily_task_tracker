<?php

namespace App\Livewire\Task;

use App\Models\Task;
use App\Models\TaskCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;

class TaskCreate extends Component
{

    use WithFileUploads;
    public $status;
    public $title;
    public $description;
    public $start_time;
    public $end_time;
    public $task_category_id;
    public $image;
    public $task_category_list;
    public $task;

    public $saveBtnDisabled=false;

    public function mount(Request $request){
        if($request->id){
            $this->getTask($request->id);
        }
        $this->task_category_list = TaskCategory::get();
    }

    protected $rules =[
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'start_time' => 'required|date',
        'end_time' => 'required|date',
        'task_category_id' => 'required|exists:task_categories,id',
        'image'=>'nullable|mimes:jpg,jpeg,png|max:2024'
    ];

    public function getTask($id){
        $task = Task::find($id);
        $this->task = $task;
        $this->title = $task->title;
        $this->description = $task->description;
        $this->start_time = $task->start_time;
        $this->end_time = $task->end_time;
        $this->task_category_id = $task->task_category_id;
        $this->image = ($task->media)?$task->media->thumbnail:null;
    }

    public function updated($name,$value){
        $this->validate($this->rules);
    }

    public function save(){
        // dd("Working");
        $this->saveBtnDisabled=true;
        $validated_data = $this->validate($this->rules);
        $this->saveBtnDisabled=false;
        $task=$this->task;
        if($this->task){
            $this->task->update($validated_data);
        }else{
            $task = Task::create($validated_data);
            $task=$task;
        }

        $this->uploadImage($task);
        return redirect()->route('task');

    }

   




    public function render()
    {
        return view('livewire.task.task-create');
    }

    public function uploadImage($task){

        if($this->image instanceof \Illuminate\Http\UploadedFile){
        deleteImage($task);
            [$inputs['image'], $inputs['thumbnail']] = createThumbnail($this->image);
            $task->media()->create($inputs);
        }
    }



}
