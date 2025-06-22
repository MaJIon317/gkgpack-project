<x-form submit="update" class="col-span-5 xl:col-span-2">
    <x-slot name="title">
        {{ __('Update Password') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </x-slot>
    
    <x-slot name="form">

        <x-fields.text 
            type="password"
            name="current_password" 
            wire:model="current_password"
            label="{{ __('Current Password') }}" 
            placeholder="{{ __('Enter your current password') }}"
            autocomplete="current-password"
            required
        />

        <x-fields.text 
            type="password"
            name="password" 
            wire:model="password"
            label="{{ __('New Password') }}" 
            placeholder="{{ __('Enter your new password') }}"
            autocomplete="new-password"
            required
        />

        <x-fields.text 
            type="password"
            name="password_confirmation" 
            wire:model="password_confirmation"
            label="{{ __('Confirm Password') }}" 
            placeholder="{{ __('Repeat your new password') }}"
            autocomplete="new-password"
            required
        />
 
    </x-slot>

    <x-slot name="actions">
        <x-button type="submit" message="{{ __('Save Settings') }}" />

    </x-slot>
</x-form>