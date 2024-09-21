<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Media extends Model
{
    use HasFactory;
    protected $fillable =['image','thumbnail'];

    public function imageable()
    {
        return $this->morphTo();
    }

    public function image():Attribute{
        return Attribute::make(
            get:fn($value) => Storage::url($value)
        );
    }

    public function thumbnail():Attribute{
        return Attribute::make(
            get:fn($value) => Storage::url($value)
        );
    }


   
 

 
 
}
