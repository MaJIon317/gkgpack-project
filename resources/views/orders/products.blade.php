<div>

    <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center">

        <div class="absolute inset-0 bg-gray-500 opacity-75" wire:click="$parent.$call('selectedProductsNull')"></div>

        <div class="relative bg-white  p-3 rounded-lg shadow-lg w-full max-w-xs">

            <div class="relative bg-white border-b-2 border-indigo-500 px-7 py-4">
                <h3 class="font-medium text-black">{{ __('Select a product') }}</h3>

                <button type="button" wire:click="$parent.$call('selectedProductsNull')" class="absolute right-3 top-3 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>

            </div>

            @foreach ($products as $product)
                <div class="bg-white border-b-2 border-indigo-500 px-7 py-4" wire:click="$parent.addProduct({{ $product }})">
                    <div class="flex items-center gap-2">
                        @php($image = method_exists($product, 'images') ? $product->images()->first() : $product->product->images()->first())

                        @if ($image)
                            <x-image src="{{ asset('storage/' . $image->path) }}" />
                        @endif
                        {{ $product->name ?? $product->product->name }}
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</div>
