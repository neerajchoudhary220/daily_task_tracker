<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LastSheetSyncking extends Model
{
    use HasFactory;
    protected $fillable = ['table_name','slug','last_sync_time','last_upload_time'];

    
}
