<div class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-8">

    <div class="flex flex-wrap items-start relative gap-4">

        <!-- Image -->
        <div class="flex-shrink-0 absolute sm:relative right-0">
            <?php if($orderProduct->product->images()->first()): ?>
                <?php if (isset($component)) { $__componentOriginal22d447e3f5aafc93b8447b54b36ee789 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal22d447e3f5aafc93b8447b54b36ee789 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image','data' => ['src' => ''.e(asset('storage/' . $orderProduct->product->images()->first()->path)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e(asset('storage/' . $orderProduct->product->images()->first()->path)).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal22d447e3f5aafc93b8447b54b36ee789)): ?>
<?php $attributes = $__attributesOriginal22d447e3f5aafc93b8447b54b36ee789; ?>
<?php unset($__attributesOriginal22d447e3f5aafc93b8447b54b36ee789); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal22d447e3f5aafc93b8447b54b36ee789)): ?>
<?php $component = $__componentOriginal22d447e3f5aafc93b8447b54b36ee789; ?>
<?php unset($__componentOriginal22d447e3f5aafc93b8447b54b36ee789); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>

        <!-- Card content -->
        <div class="flex-1 flex flex-col w-full">
            <div class="w-full flex flex-col sm:flex sm:flex-row sm:justify-between sm:items-center mb-3 gap-3">
                <h2 class="sm:text-xl leading-snug font-extrabold pr-[55px]"><?php echo e($orderProduct->product->name); ?></h2>
                <small class="flex flex-col gap-1 leading-none min-w-max">
                    <span class="col">
                        <strong><?php echo e(__('Sku')); ?>:</strong>
                        <span><?php echo e($orderProduct->product->sku); ?></span>
                    </span>
                    <span class="col">
                        <strong><?php echo e(__('Barcode')); ?>:</strong>
                        <span><?php echo e($orderProduct->product->barcode); ?></span>
                    </span>
                </small>
            </div>

            <div class="flex items-end justify-between whitespace-normal">

                <small class="flex flex-col gap-2 leading-none">
                    <span class="col">
                        <strong><?php echo e(__('Warehouse')); ?>:</strong>
                        <span><?php echo e($orderProduct->warehouse->name); ?></span>
                    </span>
                    <span class="col text-blue-700">
                        <strong><?php echo e(__('Qty')); ?>:</strong>
                        <span><?php echo e($orderProduct->qty); ?></span>
                    </span>
                    <span class="col">
                        <strong><?php echo e(__('Stock')); ?>:</strong>
                        <span>
                            <?php echo e($orderProduct->product->stocks()->where('reserve', false)->where('warehouse_id', $orderProduct->warehouse_id)->where(function ($query) use ($orderProduct) {
                                    $query->whereNot('order_product_id', $orderProduct->id)
                                        ->orWhere('order_product_id', null);
                                })->sum('qty')); ?>

                        </span>
                    </span>
                    <span class="col">
                        <strong><?php echo e(__('Current stock')); ?>:</strong>
                        <span><?php echo e($orderProduct->product->stocks()->where('warehouse_id', $orderProduct->warehouse_id)->sum('qty')); ?></span>
                    </span>
                    <span class="col">
                        <strong><?php echo e(__('Section')); ?>:</strong>
                        <span><?php echo e($orderProduct->product->section); ?></span>
                    </span>

                    <span class="col mt-2 italic opacity-50">
                        <strong><?php echo e(__('Collected')); ?>:</strong>
                        <span><?php echo e($orderProduct->collectedQty); ?> <?php echo e(__('of')); ?> <?php echo e($orderProduct->qty); ?> <?php echo e(__('pcs.')); ?>.</span>
                    </span>
                </small>



                <?php if(!$errors && ($orderProduct->order->status !== \App\Enums\OrderStatuses::COMPLETED->value)): ?>
                    <div class="flex flex-col gap-5 items-end">
                        <?php if(!$collected): ?>

                            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('scanner', ['scanner' => $scanner = rand(0, 1000000),'button' => '
                                <button type="button" class="text-indigo-400 hover:text-indigo-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
                                        <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5M3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0z"></path>
                                    </svg>
                                </button>
                            ']);

$__html = app('livewire')->mount($__name, $__params, 'lw-2520491108-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                                    <?php
        $__scriptKey = '2520491108-0';
        ob_start();
    ?>
                                    <script>
                                        Livewire.on('barcodeResult<?php echo e($scanner); ?>', ($this) => {
                                            if ($this.result === '<?php echo e($orderProduct->product->barcode); ?>') {
                                                $wire.searchBarcode($this.result);
                                            } else {
                                                toast("<?php echo e(__('Product not found')); ?>", 'error');
                                            }
                                        })
                                    </script>
                                    <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?>
                            </livewire:scanner>
                        <?php endif; ?>

                        <label class="inline-flex items-center cursor-pointer ml-2">
                            <input type="checkbox" wire:model.live="collected" class="sr-only peer">
                            <div class="relative w-14 h-7 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600 dark:peer-checked:bg-blue-600"></div>
                        </label>
                    </div>
                <?php endif; ?>

            </div>

            <?php if($errors): ?>
                <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errorCode => $errorText): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex justify-between mt-4 p-3 text-white rounded-lg bg-red-500 gap-4" role="alert">
                        <?php echo e($errorText); ?>


                        <button type="button" wire:click="allowedError<?php echo e(ucfirst($errorCode)); ?>" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"><?php echo e(__('Decided')); ?></button>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

        </div>

    </div>
</div>
<?php /**PATH /var/www/gkgpack.su/public_html/resources/views/orders/collect-item.blade.php ENDPATH**/ ?>