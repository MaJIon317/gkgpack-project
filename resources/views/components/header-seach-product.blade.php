<div>
    <div class="flex items-center leading-[0px] gap-2">
        <livewire:scanner :scanner="$scanner = rand(0, 1000000)" button='
            <button type="button" class="text-indigo-400 hover:text-indigo-700">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                    <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5M3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0z"></path>
                </svg>
            </button>
        '>
            @script
                <script>
                    Livewire.on('barcodeResult{{ $scanner }}', ($this) => {
                        let test = $wire.searchBarcode($this.result);

                        Livewire.on('scannerReset', () => {
                            scannerDisconnect()
                        })
                    })
                </script>
            @endscript
        </livewire:scanner>

        <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                    <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>

            <input
                type="text"
                class="w-32 pl-10 py-2 pr-4 rounded-md form-input sm:w-64 focus:border-indigo-600"
                placeholder="Search"
                wire:model="search"
                wire:keydown.enter="searchBarcode">
        </div>

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

    </div>
</div>
