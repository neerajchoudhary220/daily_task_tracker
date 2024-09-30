<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SavingMoneyController extends Controller
{
    public function index(){
        return view('saving-money.index');
    }
}
