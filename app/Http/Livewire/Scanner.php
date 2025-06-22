<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Scanner extends Component
{
    public string $scanner;

    public string|null $button = null;

    public function render()
    {
        return view('components.scanner');
    }
}
