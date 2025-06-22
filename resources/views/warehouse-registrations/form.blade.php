<x-form submit="{{ $warehouseRegistration ? 'update' : 'store' }}" class="col-span-5 xl:col-span-3">

    <x-slot name="title">
        {{ $warehouseRegistration ? __('Edit warehouse registration') : __('Create warehouse registration') }}
    </x-slot>

    <x-slot name="form">

        <x-fields.select
            label="Warehouse"
            wire:model="warehouse_id"
            required>

            @foreach ($warehouses as $warehouse)
                <option value="{{ $warehouse->id }}" {{ $warehouse_id == $warehouse->id  ? 'selected' : '' }}>{{ __($warehouse->name) }}</option>
            @endforeach
        </x-fields.select >

        <x-fields.textarea
            name="note"
            wire:model="note"
            label="{{ __('Note') }}"
            placeholder="{{ __('Enter the note') }}"
        />

        <x-fields.text
            name="search"
            label="{{ __('Adding products') }}"
            wire:model="search"
            wire:keyup.debounce.300ms="searchProducts"
            placeholder="{{ __('Enter to add the product') }}"
        >
            <x-slot:buttons>
                <livewire:scanner :scanner="$scanner = rand(0, 1000000)">
                    @script
                        <script>
                            Livewire.on('barcodeResult{{ $scanner }}', ($this) => {
                                let test = $wire.searchBarcode($this.result);
                            })
                        </script>
                    @endscript
                </livewire:scanner>
            </x-slot:buttons>

            @if ($searchResults->count())
                <div class="relative w-full">
                    <div class="absolute z-10 w-full bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 overflow-x-auto max-h-[300px]">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            @foreach ($searchResults as $product)
                                <li>
                                    <button type="button" wire:click="addProduct({{ $product }})" class="block w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        {{ $product->name }}
                                        <small>
                                            <span>
                                                <strong>{{ __('Sku') }}:</strong>
                                                <span>{{ $product->sku }}</span>
                                            </span>
                                            <span>
                                                <strong>{{ __('Barcode') }}:</strong>
                                                <span>{{ $product->barcode }}</span>
                                            </span>
                                        </small>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

        </x-fields.text>

        @if ($products->count())
            <x-table-default>
                <x-slot name="thead">
                    <x-table-default-column tag="th" class="min-w-[180px]">{{ __('Product') }}</x-table-default-column>
                    <x-table-default-column tag="th" class="min-w-[100px]">{{ __('Qty') }}</x-table-default-column>
                    <x-table-default-column tag="th" class="min-w-[100px]">{{ __('Stock') }}</x-table-default-column>
                    <x-table-default-column tag="th" class="min-w-[80px]">{{ __('Section') }}</x-table-default-column>
                    <x-table-default-column tag="th"></x-table-default-column>
                </x-slot>

                @foreach($products as $product)
                    <tr>
                        <x-table-default-column>
                            <div class="flex gap-3">
                                @if ($product->images()->first())
                                <x-image src="{{ asset('storage/' . $product->images()->first()->path) }}" />
                                @endif
                                <div class="flex flex-col gap-2">
                                    {{ $product->name }}

                                    <small class="flex flex-col">
                                        <span class="col">
                                            <strong>{{ __('Sku') }}:</strong>
                                            <span>{{ $product->sku }}</span>
                                        </span>
                                        <span class="col">
                                            <strong>{{ __('Barcode') }}:</strong>
                                            <span>{{ $product->barcode }}</span>
                                        </span>
                                    </small>
                                </div>
                            </div>
                        </x-table-default-column>
                        <x-table-default-column>
                            <x-fields.text
                                classBlock=""
                                wire:model="data.{{ $product->id }}.qty"
                                placeholder="{{ __('Qty') }}"
                                value="{{ $data[$product->id]['qty'] ?? 1 }}"
                                required
                            />
                        </x-table-default-column>
                        <x-table-default-column>
                            {{ $product->stocks()->where('warehouse_id', $warehouse_id)->where(function ($query) use ($warehouseRegistration) {
                                if ($warehouseRegistration) {
                                    $query->whereNot('warehouse_registration_id', $warehouseRegistration->id)
                                        ->orWhere('warehouse_registration_id', null);
                                }
                            })->sum('qty') }}
                        </x-table-default-column>
                        <x-table-default-column>
                            <x-fields.text
                                classBlock=""
                                wire:model="data.{{ $product->id }}.section"
                                wire:change="updateSection({{ $product }}, $event.target.value)"
                                placeholder="{{ __('Section') }}"
                                value="{{ $product->section }}"
                                required
                            />
                        </x-table-default-column>
                        <x-table-default-column class="w-1">
                            <x-button
                                color="a"
                                wire:click="delete({{ $product }})"
                                title="{{ __('Delete') }}"
                            >
                                <svg class="fill-current" width="20" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7535 2.47502H11.5879V1.9969C11.5879 1.15315 10.9129 0.478149 10.0691 0.478149H7.90352C7.05977 0.478149 6.38477 1.15315 6.38477 1.9969V2.47502H4.21914C3.40352 2.47502 2.72852 3.15002 2.72852 3.96565V4.8094C2.72852 5.42815 3.09414 5.9344 3.62852 6.1594L4.07852 15.4688C4.13477 16.6219 5.09102 17.5219 6.24414 17.5219H11.7004C12.8535 17.5219 13.8098 16.6219 13.866 15.4688L14.3441 6.13127C14.8785 5.90627 15.2441 5.3719 15.2441 4.78127V3.93752C15.2441 3.15002 14.5691 2.47502 13.7535 2.47502ZM7.67852 1.9969C7.67852 1.85627 7.79102 1.74377 7.93164 1.74377H10.0973C10.2379 1.74377 10.3504 1.85627 10.3504 1.9969V2.47502H7.70664V1.9969H7.67852ZM4.02227 3.96565C4.02227 3.85315 4.10664 3.74065 4.24727 3.74065H13.7535C13.866 3.74065 13.9785 3.82502 13.9785 3.96565V4.8094C13.9785 4.9219 13.8941 5.0344 13.7535 5.0344H4.24727C4.13477 5.0344 4.02227 4.95002 4.02227 4.8094V3.96565ZM11.7285 16.2563H6.27227C5.79414 16.2563 5.40039 15.8906 5.37227 15.3844L4.95039 6.2719H13.0785L12.6566 15.3844C12.6004 15.8625 12.2066 16.2563 11.7285 16.2563Z" fill=""></path>
                                    <path d="M9.00039 9.11255C8.66289 9.11255 8.35352 9.3938 8.35352 9.75942V13.3313C8.35352 13.6688 8.63477 13.9782 9.00039 13.9782C9.33789 13.9782 9.64727 13.6969 9.64727 13.3313V9.75942C9.64727 9.3938 9.33789 9.11255 9.00039 9.11255Z" fill=""></path>
                                    <path d="M11.2502 9.67504C10.8846 9.64692 10.6033 9.90004 10.5752 10.2657L10.4064 12.7407C10.3783 13.0782 10.6314 13.3875 10.9971 13.4157C11.0252 13.4157 11.0252 13.4157 11.0533 13.4157C11.3908 13.4157 11.6721 13.1625 11.6721 12.825L11.8408 10.35C11.8408 9.98442 11.5877 9.70317 11.2502 9.67504Z" fill=""></path><path d="M6.72245 9.67504C6.38495 9.70317 6.1037 10.0125 6.13182 10.35L6.3287 12.825C6.35683 13.1625 6.63808 13.4157 6.94745 13.4157C6.97558 13.4157 6.97558 13.4157 7.0037 13.4157C7.3412 13.3875 7.62245 13.0782 7.59433 12.7407L7.39745 10.2657C7.39745 9.90004 7.08808 9.64692 6.72245 9.67504Z" fill=""></path>
                                </svg>
                            </x-button>
                        </x-table-default-column>
                    </tr>
                @endforeach
            </x-table-default>
        @endif

        @if ($selectedProducts && $selectedProducts->count())
            <livewire:orderProducts :products="$selectedProducts" />
        @endif

    </x-slot>

    <x-slot name="actions">
        @if ($warehouseRegistration)
            <x-button type="button" color="dark" message="{{ __('DONE') }}" wire:click="$dispatch('closeModal')" />
        @endif
        <x-button
            type="button"
            message="{{ __('Commit') }}"
            wire:click="{{ $warehouseRegistration ? 'update' : 'store' }}"
            wire:confirm="{{ __('Please confirm the section') }}" />
    </x-slot>
</x-form>
