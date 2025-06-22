<x-form submit="{{ $user ? 'update' : 'store' }}" class="col-span-5 xl:col-span-3">

    <x-slot name="title">
        {{ $user ? __('Edit User, :name', ['name' => $user->name]) : __('Create User') }}
    </x-slot>

    <x-slot name="form">

        <x-fields.select
            wire:model="role"
            label="{{ __('Role') }}"
            required>

            @foreach ($roles as $value)
                <option value="{{ $value->value }}" @if ($role == $value->value) selected @endif>{{ __(ucfirst($value->value)) }}</option>
            @endforeach
        </x-fields.select >

        <x-fields.text
            name="name"
            wire:model="name"
            label="{{ __('Name') }}"
            placeholder="{{ __('Enter the name') }}"
            required
        />

        <x-fields.text
            type="email"
            name="email"
            wire:model="email"
            label="{{ __('Email') }}"
            placeholder="{{ __('Enter the email') }}"
            required
        />

        <x-fields.text
            type="password"
            name="password"
            wire:model="password"
            label="{{ __('Password') }}"
            placeholder="{{ __('Enter the password') }}"
            :required="!$user"

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
        @if ($user)
            <x-button type="button" color="dark" message="{{ __('DONE') }}" wire:click="$dispatch('closeModal')" />
        @endif
        <x-button type="submit" message="{{ __('Commit') }}" />
    </x-slot>
</x-form>
