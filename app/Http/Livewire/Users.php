<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Users extends Component
{
    public function render()
    {
        return view('users.index') 
            ->title('Users');
    }
}
