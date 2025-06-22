<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SettingsInformation extends Component
{
    public $user;

    public $name;
    
    public $email;

    public $timezone;

    public function mount()
    {
        $this->user = Auth::user();

        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->timezone = $this->user->timezone;
    }
    
    public function rules()
    {
        return [
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email|unique:users,email,' . $this->user->id,
            'timezone' => 'nullable|in:' . timezones()->keys()->implode(','),
        ];
    }
 
    public function update()
    {
        $this->validate();

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'timezone' => $this->timezone,
        ]);

        $this->dispatch('toast', message: __('Saved successfully'));
    }

    public function render()
    {
        return view('settings.information');
    }
}
