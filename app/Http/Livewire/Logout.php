<?php

namespace App\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    public function logout(): void
    {
        Auth::logout();

        session()->invalidate();

        session()->regenerateToken();

        $this->redirectRoute('login', navigate: true);
    }

    public function render(): View
    {
        return view('logout');
    }
}
