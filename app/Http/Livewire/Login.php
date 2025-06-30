<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required|email')]
    public $email;

    #[Validate('required')]
    public $password;

    public function mount(): void
    {
        if (Auth::check()) {
            $this->redirectRoute('dashboard', navigate: true);
        }
    }

    public function login(): void
    {
        $this->validate();

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials))
        {
            session()->regenerate();

            $this->redirectRoute('dashboard', navigate: true);
        } else {
            $this->dispatch('toast', message: __('Invalid credentials!'), type: 'error');
        }
    }

    public function render(): View
    {
        return view('login')
            ->layout('layouts.guest')
            ->title(__('Authorization'));
    }
}
