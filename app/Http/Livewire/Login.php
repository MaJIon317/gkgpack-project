<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required|email')]
    public $email;

    #[Validate('required')]
    public $password;

    public function mount()
    {
        if (Auth::check()) {
            $this->redirectRoute('dashboard', navigate: true);
        }
    }

    public function login()
    {
        $this->validate();

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];
        
        if(Auth::attempt($credentials))
        {
            session()->regenerate();

            return $this->redirectRoute('dashboard', navigate: true);
        }
        
        $this->dispatch('toast', message: __('Invalid credentials!'), type: 'error');
    }

    public function render()
    {
        return view('login')
            ->layout('layouts.guest')
            ->title(__('Authorization'));
    }
}
