<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    public function logout()
    {
        Auth::logout();

        session()->invalidate();
    
        session()->regenerateToken();
    
        return $this->redirectRoute('login', navigate: true);
    }
    
    public function render()
    {
        return view('logout');
    }
}