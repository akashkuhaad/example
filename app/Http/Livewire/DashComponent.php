<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DashComponent extends Component
{
    public function render()
    {
        return view('livewire.dash-component')->layout('layouts.base');
    }
}
