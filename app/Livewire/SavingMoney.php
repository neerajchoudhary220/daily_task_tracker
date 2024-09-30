<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;
use App\Models\SavingMoney as Money;
use Illuminate\Support\Facades\Session;

class SavingMoney extends Component
{
    public $title;
    public $description;

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
    ];
    public function save(){
       $validated_data= $this->validate();
       Money::create($validated_data);
       Session::flash('message', 'Task saved successfully');


    }
    public function render()
    {
        return view('livewire.saving-money');
    }
}
