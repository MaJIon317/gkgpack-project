<div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-8">

    <div class="flex flex-wrap items-start relative gap-4">

        <!-- Image -->
        <div class="flex-shrink-0 absolute sm:relative right-0">
            @if ($orderProduct->product->images()->first())
                <x-image src="{{ asset('storage/' . $orderProduct->product->images()->first()->path) }}" />
            @endif
        </div>

        <!-- Card content -->
        <div class="flex-1 flex flex-col w-full">
            <div class="w-full flex flex-col sm:flex sm:flex-row sm:justify-between sm:items-center mb-3 gap-3">
                <h2 class="sm:text-xl leading-snug font-extrabold pr-[55px]">{{ $orderProduct->product->name }}</h2>
                <small class="flex flex-col gap-1 leading-none min-w-max">
                    <span class="col">
                        <strong>{{ __('Sku') }}:</strong>
                        <span>{{ $orderProduct->product->sku }}</span>
                    </span>
                    <span class="col">
                        <strong>{{ __('Barcode') }}:</strong>
                        <span>{{ $orderProduct->product->barcode }}</span>
                    </span>
                </small>
            </div>

            <div class="flex items-end justify-between whitespace-normal">

                <small class="flex flex-col gap-2 leading-none">
                    <span class="col">
                        <strong>{{ __('Warehouse') }}:</strong>
                        <span>{{ $orderProduct->warehouse->name }}</span>
                    </span>
                    <span class="col text-blue-700">
                        <strong>{{ __('Qty') }}:</strong>
                        <span>{{ $orderProduct->qty }}</span>
                    </span>
                    <span class="col">
                        <strong>{{ __('Stock') }}:</strong>
                        <span>
                            {{ $orderProduct->product->stocks()->where('reserve', false)->where('warehouse_id', $orderProduct->warehouse_id)->where(function ($query) use ($orderProduct) {
                                    $query->whereNot('order_product_id', $orderProduct->id)
                                        ->orWhere('order_product_id', null);
                                })->sum('qty') }}
                        </span>
                    </span>
                    <span class="col">
                        <strong>{{ __('Current stock') }}:</strong>
                        <span>{{ $orderProduct->product->stocks()->where('warehouse_id', $orderProduct->warehouse_id)->sum('qty') }}</span>
                    </span>
                    <span class="col">
                        <strong>{{ __('Section') }}:</strong>
                        <span>{{ $orderProduct->product->section }}</span>
                    </span>

                    <span class="col mt-2 italic opacity-50">
                        <strong>{{ __('Collected') }}:</strong>
                        <span>{{ $orderProduct->collectedQty }} {{ __('of') }} {{ $orderProduct->qty }} {{ __('pcs.') }}.</span>
                    </span>
                </small>



                @if (!$errors && ($orderProduct->order->status !== \App\Enums\OrderStatuses::COMPLETED->value))
                    <div class="flex flex-col gap-5 items-end">
                        @if (!$collected)

                            <livewire:scanner :scanner="$scanner = rand(0, 1000000)" button='
                                <button type="button" class="text-indigo-400 hover:text-indigo-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
                                        <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5M3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0z"></path>
                                    </svg>
                                </button>
                            '>
                                @script
                                    <script>
                                        Livewire.on('barcodeResult{{ $scanner }}', ($this) => {
                                            if ($this.result === '{{ $orderProduct->product->barcode }}') {
                                                $wire.searchBarcode($this.result);
                                            } else {
                                                toast("{{ __('Product not found') }}", 'error');
                                            }
                                        })
                                    </script>
                                @endscript
                            </livewire:scanner>
                        @endif

                        <label class="inline-flex items-center cursor-pointer ml-2">
                            <input type="checkbox" wire:model.live="collected" class="sr-only peer">
                            <div class="relative w-14 h-7 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600 dark:peer-checked:bg-blue-600"></div>
                        </label>
                    </div>
                @endif

            </div>

            @if ($errors)
                @foreach ($errors as $errorCode => $errorText)
                    <div class="flex justify-between mt-4 p-3 text-white rounded-lg bg-red-500 gap-4" role="alert">
                        {{ $errorText }}

                        <button type="button" wire:click="allowedError{{ ucfirst($errorCode) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">{{ __('Decided') }}</button>
                    </div>
                @endforeach
            @endif

        </div>

    </div>
</div>
