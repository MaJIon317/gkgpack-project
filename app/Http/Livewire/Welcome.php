<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public function render()
    {
        return view('welcome')
            ->layout('layouts.guest')
            ->title(__('Welcome'));
    }
}
