<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Image extends Component
{ public $path;
    public $style;
    public $alt;
    public function construct($path,$alt,$style)
    {
        $this->path=$path;
        $this->alt=$alt;
        $this->style=$style;
    }
    public function render()
    {
        return view('livewire.image');
    }
}
