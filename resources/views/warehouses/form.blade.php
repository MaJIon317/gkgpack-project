<x-form submit="{{ $warehouse ? 'update' : 'store' }}" class="col-span-5 xl:col-span-3">

    <x-slot name="title">
        {{ $warehouse ? __('Edit Warehouse, :name', ['name' => $warehouse->name]) : __('Create warehouse') }}
    </x-slot>

    <x-slot name="form">

        <x-fields.text
            name="name"
            wire:model="name"
            label="{{ __('Name') }}"
            placeholder="{{ __('Enter the name') }}"
            required
        />

        @livewire('components.history', ['object' => $warehouse])

    </x-slot>

    <x-slot name="actions">
        @if ($warehouse)
            <x-button type="button" color="dark" message="{{ __('DONE') }}" wire:click="$dispatch('closeModal')" />
        @endif
        <x-button type="submit" message="{{ __('Commit') }}" />
    </x-slot>
</x-form>
