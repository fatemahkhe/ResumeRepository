<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Header extends Component
{
    public $header1;
    public $header2;
    public $header3;
    public $header4;
    public $header5;
    public $header6;
    public function construct($header1,$header2,$header3,$header4,$header5,$header6){
        $this->header1=$header1;
        $this->header2=$header2;
        $this->header3=$header3;
        $this->header4=$header4;
        $this->header5=$header5;
        $this->header6=$header6;
    }
    public function render()
    {
        return view('livewire.admin.header');
    }
}
