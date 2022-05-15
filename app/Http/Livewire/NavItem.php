<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NavItem extends Component
{
    public $style;
    public $url;
    public $type;
    public $navTitle;
    public function construct($style,$url,$type,$navTitle)
    {
        $this->style=$style;
        $this->url=$url;
        $this->type=$type;
        $this->navTitle=$navTitle;
        
    }
    public function render()
    {
        return view('livewire.nav-item');
    }
}
