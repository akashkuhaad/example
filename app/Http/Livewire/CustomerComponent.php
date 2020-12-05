<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CustomerComponent extends Component
{
    public function render()
    {
        return view('livewire.customer-component')->layout('layouts.base');
    }
}
