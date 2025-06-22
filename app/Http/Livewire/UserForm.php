<?php

namespace App\Http\Livewire;

use App\Enums\UserRole;
use App\Models\User;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use LivewireUI\Modal\ModalComponent;

class UserForm extends ModalComponent
{
    public User|null $user = null;

    public $roles;

    public string $role = 'user';

    public string $name = '';

    public string $email = '';

    public string $password = '';

    public string|null $timezone = null;

    public function mount()
    {
        $this->roles = UserRole::cases();

        // User
        $this->role = $this->user->role->value ?? $this->delete->role->value ?? $this->role;
        $this->name = $this->user->name ?? $this->delete->name ?? $this->name;
        $this->email = $this->user->email ?? $this->delete->email ?? $this->email;
        $this->timezone = $this->user->timezone ?? $this->delete->timezone ?? $this->timezone;
    }

    public function store()
    {
        $rules = new UserStoreRequest;

        $validated = $this->validate($rules->rules());

        $validated = $this->resetField($validated, ['timezone']);

        User::create($validated);

        $this->closeModal();

        $this->dispatch('toast', message: __('Completed successfully'));
    }

    public function update()
    {   
        $rules = new UserUpdateRequest;

        $rules->user = $this->user;

        $validated = $this->validate($rules->rules());

        $validated = $this->resetField($validated, ['timezone']);

        $this->user->update($validated);

        $this->closeModal();

        $this->dispatch('toast', message: __('Saved successfully'));
    }

    private function resetField($validated, $except = [])
    {
        foreach($validated as $key => $value) {
            if (!$value && !in_array($key, $except)) {
                unset($validated[$key]);
            }
        }

        return $validated;
    }

    public function render()
    {
        return view('users.form');
    }
}
