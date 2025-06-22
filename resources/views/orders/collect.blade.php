<div>
    <div class="bg-white border-b-2 border-indigo-500 px-7 py-4">
        <h3 class="font-medium text-black">{{ __('Order assembly №:order_id, :name', ['order_id' => $order->id, 'name' => $order->name]) }}</h3>
    </div>

    <div class="px-7 py-4">
        <div class="flex flex-col gap-4 mb-5">
            @foreach ($order->products as $orderProduct)
                @livewire('orderCollectItem', ['orderProduct' => $orderProduct], key($order->id . $orderProduct->id))
            @endforeach
        </div>

        @if (!$completed && !$errors)
            <x-button type="button" style="width: 100%;" wire:click="collect" message="{{ __('Order collected') }}" />
        @endif

    </div>
</div>
