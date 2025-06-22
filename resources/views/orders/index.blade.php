<div>
    @if (auth()->user()->hasRole(['admin', 'user']))
        <x-slot:actions>
            <div class="flex">
                <x-button
                    message="{{ __('Create order') }}"
                    x-on:click="Livewire.dispatch('openModal', {component: 'order-form'})"
                />
            </div>
        </x-slot:actions>
    @endif

    <x-table-default>
        <x-slot name="thead">
            <x-table-default-column tag="th" class="min-w-[160px] w-[160px]"></x-table-default-column>
            <x-table-default-column tag="th">{{ __('Name') }}</x-table-default-column>
            <x-table-default-column tag="th">{{ __('Barcode') }}</x-table-default-column>
            <x-table-default-column tag="th">{{ __('Note') }}</x-table-default-column>
            <x-table-default-column tag="th">
                <x-fields.select
                    wire:model.change="filter.status"
                    label=""
                    classBlock="mb-0">

                    <option value="">{{ __('Status') }}</option>

                    @foreach (\App\Enums\OrderStatuses::cases() as $enum)
                        <option value="{{ $enum->value }}">{{ __(ucfirst($enum->value)) }}</option>
                    @endforeach
                </x-fields.select >
            </x-table-default-column>
            <x-table-default-column tag="th">{{ __('Created at') }}</x-table-default-column>
            <x-table-default-column tag="th">{{ __('Updated at') }}</x-table-default-column>
            <x-table-default-column tag="th" class="text-right">{{ __('Actions') }}</x-table-default-column>

            <x-table-default-column tag="th" class="w-1">
                @if (auth()->user()->hasRole(['admin', 'user']))
                    <div x-data="{ actionOpen: false }" class="relative">
                        <x-button
                            @click="actionOpen = ! actionOpen"
                            color="a"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5">
                                <path d="M10 3a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM10 8.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM11.5 15.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"></path>
                            </svg>
                        </x-button>

                        <div x-cloak x-show="actionOpen" @click="actionOpen = false" class="fixed inset-0 z-10 w-full h-full"></div>

                        <div x-cloak x-show="actionOpen" class="absolute right-0 z-10 mt-2 overflow-hidden bg-white rounded-lg shadow-xl w-40">
                            <x-button
                                class="flex items-center px-3 py-2 text-gray-600 hover:text-white hover:bg-indigo-600 w-full"
                                message="{{ __('Export to excel') }}"
                                wire:click="export"
                            />

                            <x-button
                                class="flex items-center px-3 py-2 text-gray-600 hover:text-white hover:bg-indigo-600 w-full"
                                message="{{ __('Import to excel') }}"
                                x-on:click="Livewire.dispatch('openModal', {component: 'import', arguments: { key: 'order' }})"
                            />
                        </div>
                    </div>
                @endif
            </x-table-default-column>
        </x-slot>

        @if ($orders->count())
            @foreach($orders as $order)
                @livewire('order-item', ['order' => $order], key('orders.'.$order->id))
            @endforeach
        @else
            <tr>
                <x-table-default-column colspan="5">
                    <p class="font-medium">{{ __('No data available') }}</p>
                </x-table-default-column>
            </tr>
        @endif
    </x-table-default>

    {{ $orders->links() }}

</div>
