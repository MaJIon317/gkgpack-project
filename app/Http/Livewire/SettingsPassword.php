<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class SettingsPassword extends Component
{
    public $user;

    public $current_password;

    public $password;

    public $password_confirmation;
    
    public function mount()
    {
        $this->user = Auth::user();
    }
    
    public function rules()
    {
        return [
            'current_password' => 'required|current_password:web',
            'password' => 'required|min:8|confirmed',
        ];
    }

    public function update()
    {
        $this->validate();

        $this->user->update([
            'password' => Hash::make($this->password)
        ]);

        $this->dispatch('toast', message: __('Saved successfully'));
    }

    public function render()
    {
        return view('settings.password');
    }
}
