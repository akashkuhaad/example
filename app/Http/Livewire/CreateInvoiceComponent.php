<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateInvoiceComponent extends Component
{
    public function render()
    {
        return view('livewire.create-invoice-component')->layout('layouts.base');
    }
}
