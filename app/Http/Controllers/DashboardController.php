<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $task =Task::get();
        return view('dashboard.index',compact('task'));
    }
}
