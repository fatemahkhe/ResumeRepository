<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Logo extends Component
{ public $path;
    public function construct($path)
    {
        $this->path=$path;
        
    }
    public function render()
    {
        return view('livewire.logo');
    }
}
