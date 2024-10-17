<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory,SoftDeletes;
    protected $appends = ['place_holder'];


    protected $fillable =['media_id','status','title','description','start_time','end_time','completed_time','task_category_id'];
  
    public function placeHolder():Attribute{
        return Attribute::make(
            get:fn() => asset('assets/images/placeholder.png')
        );
    }
    
    public function getStartDateAttribute(){
        return Carbon::parse($this->start_time)->format(config('constant.datetime_format'));
    }
    public function getEndDateAttribute(){
        return Carbon::parse($this->end_time)->format(config('constant.datetime_format'));
    }

    public function  getTaskStatusAttribute(){
        return $this->status?'<div class="badge badge-success p-2"><i class="feather icon-check"></i> Completed</div>':'<div class="badge badge-warning text-white p-2"><i class="feather icon-clock"></i> Pending</div>';
    }
        
    protected function title():Attribute{
        return Attribute::make(
            get:fn($value)=>strlen($value)>50?substr(ucfirst($value),0,50).'...':ucfirst($value)
        );
    }

    public function media(){
        return $this->morphOne(Media::class,'imageable');
    }

    /**
     * Get the user that owns the Task
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function taskCategory(): BelongsTo
    {
        return $this->belongsTo(TaskCategory::class, 'task_category_id');
    }
}
