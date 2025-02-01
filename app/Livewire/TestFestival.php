<?php

namespace App\Livewire;

use Livewire\Component;

class TestFestival extends Component
{
    public $xyz;
    public function updateXyz(){
        dd("Working");
    }
    public function render()
    {
        return view('livewire.test-festival');
    }
}
