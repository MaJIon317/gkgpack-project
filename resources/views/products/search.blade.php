<div>

    <div x-data="{ selectedAccordionItem: {{ array_key_first($products) }} }">
        @foreach ($products as $product)
            <div class="bg-white border-b-2 border-indigo-500 px-7 py-4">
                <h3 class="font-medium text-black flex items-center gap-2" x-on:click="selectedAccordionItem = {{ $product->id }}">
                    @if ($product->images()->first())
                        <x-image src="{{ asset('storage/' . $product->images()->first()->path) }}" />
                    @endif
                    {{ __('Product Management :name', ['name' => $product->name]) }}
                </h3>
            </div>

            <div class="px-7" x-cloak x-show="selectedAccordionItem === {{ $product->id }}" x-collapse>

                <ul class="flex mt-3">
                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border border-gray-200 text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-neutral-900 dark:border-neutral-700 dark:text-white">
                        <div class="flex justify-between items-center gap-3 w-full">
                            {{ __('Stock') }}:
                            <strong>{{ $product->stocks()->where('reserve', false)->sum('qty') }}</strong>
                        </div>
                    </li>
                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border border-gray-200 text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-neutral-900 dark:border-neutral-700 dark:text-white">
                        <div class="flex justify-between items-center gap-3 w-full">
                            {{ __('Currect stock') }}:
                            <strong>{{ $product->stocks()->sum('qty') }}</strong>
                        </div>
                    </li>
                  </ul>

                <ul class="my-4 space-y-3">

                    <li>
                        <button
                            wire:click="$dispatch('openModal', { component: 'warehouse-registration-form', arguments: { product: {{ $product }} }})"
                            type="button"
                            class="flex items-center p-3 text-start font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white w-full">
                            {{ __('Stock-In') }}
                        </button>
                    </li>
                    <li>
                        <button
                            wire:click="$dispatch('openModal', { component: 'warehouse-reduce-form', arguments: { product: {{ $product }} }})"
                            type="button"
                            class="flex items-center p-3 text-start font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white w-full">
                            {{ __('Stock-Out') }}
                        </button>
                    </li>
                    @if (!auth()->user()->hasRole('importer'))
                        <li>
                            <button
                                wire:click="$dispatch('openModal', { component: 'product-form', arguments: { product: {{ $product }} }})"
                                type="button"
                                class="flex items-center p-3 text-start font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white w-full">
                                {{ __('Edit') }}
                            </button>
                        </li>
                    @endif

                    <hr>
                    <li>
                        <button
                            wire:click="deleteProduct({{ $product }})"
                            wire:confirm="{{ __('Do you really want to delete the product?') }}"
                            type="button"
                            class="text-red-500 hover:text-red-800 text-left text-sm">
                            {{ __('Delete') }}
                        </button>
                    </li>
                </ul>
            </div>
        @endforeach
    </div>
</div>
