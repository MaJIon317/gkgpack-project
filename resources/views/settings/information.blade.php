<x-form submit="update" class="col-span-5 xl:col-span-3">

    <x-slot name="title">
        {{ __('User Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">

        <x-fields.text 
            name="name" 
            wire:model="name"
            label="{{ __('Name') }}" 
            placeholder="{{ __('Enter your name') }}"
            required
        />

        <x-fields.text 
            type="email"
            name="email" 
            wire:model="email"
            label="{{ __('Email') }}" 
            placeholder="{{ __('Enter your email') }}"
            required
        />

        <x-fields.select
            wire:model="timezone" 
            label="{{ __('Timezone') }}"
            required>

            <option value=""></option>
            @foreach (timezones() as $key => $value)
                <option value="{{ $key }}" @if ($timezone == $key) selected @endif>{{ $value }}</option>
            @endforeach

            <x-slot name="tooltip">
                {{ __('You can select the time zone in which all data of the Date type will be displayed. Default timezone: :timezone', ['timezone' => (string) now()->tz]) }}
            </x-slot>
            
        </x-fields.select >

    </x-slot>

    <x-slot name="actions">
        <x-button type="submit" message="{{ __('Save Settings') }}" />

    </x-slot>
</x-form>

