<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateFileIdComponent extends Component
{
    public $series;
    
    public function render()
    {
        return view('livewire.create-file-id-component');
    }
}
