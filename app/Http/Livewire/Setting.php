<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Setting extends Component
{
    public function render()
    {
        return view('setting')
            ->title(__('User Setting'));
    }
}
