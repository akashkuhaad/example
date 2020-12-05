<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VenderComponent extends Component
{
    public function render()
    {
        return view('livewire.vender-component')->layout('layouts.base');
    }
}
