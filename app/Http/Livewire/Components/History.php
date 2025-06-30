<?php

namespace App\Http\Livewire\Components;

use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;
use Livewire\Component;

class History extends Component
{
    public ?Model $object = null;

    public function render(): View
    {
        return view('components.history');
    }
}
