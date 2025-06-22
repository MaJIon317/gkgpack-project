<div>

    <div x-data="{ selectedAccordionItem: <?php echo e(array_key_first($products)); ?> }">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white border-b-2 border-indigo-500 px-7 py-4">
                <h3 class="font-medium text-black flex items-center gap-2" x-on:click="selectedAccordionItem = <?php echo e($product->id); ?>">
                    <?php if($product->images()->first()): ?>
                        <?php if (isset($component)) { $__componentOriginal22d447e3f5aafc93b8447b54b36ee789 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal22d447e3f5aafc93b8447b54b36ee789 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image','data' => ['src' => ''.e(asset('storage/' . $product->images()->first()->path)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e(asset('storage/' . $product->images()->first()->path)).'']); ?>
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
                    <?php echo e(__('Product Management :name', ['name' => $product->name])); ?>

                </h3>
            </div>

            <div class="px-7" x-cloak x-show="selectedAccordionItem === <?php echo e($product->id); ?>" x-collapse>

                <ul class="flex mt-3">
                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border border-gray-200 text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-neutral-900 dark:border-neutral-700 dark:text-white">
                        <div class="flex justify-between items-center gap-3 w-full">
                            <?php echo e(__('Stock')); ?>:
                            <strong><?php echo e($product->stocks()->where('reserve', false)->sum('qty')); ?></strong>
                        </div>
                    </li>
                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border border-gray-200 text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-neutral-900 dark:border-neutral-700 dark:text-white">
                        <div class="flex justify-between items-center gap-3 w-full">
                            <?php echo e(__('Currect stock')); ?>:
                            <strong><?php echo e($product->stocks()->sum('qty')); ?></strong>
                        </div>
                    </li>
                  </ul>

                <ul class="my-4 space-y-3">

                    <li>
                        <button
                            wire:click="$dispatch('openModal', { component: 'warehouse-registration-form', arguments: { product: <?php echo e($product); ?> }})"
                            type="button"
                            class="flex items-center p-3 text-start font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white w-full">
                            <?php echo e(__('Stock-In')); ?>

                        </button>
                    </li>
                    <li>
                        <button
                            wire:click="$dispatch('openModal', { component: 'warehouse-reduce-form', arguments: { product: <?php echo e($product); ?> }})"
                            type="button"
                            class="flex items-center p-3 text-start font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white w-full">
                            <?php echo e(__('Stock-Out')); ?>

                        </button>
                    </li>
                    <?php if(!auth()->user()->hasRole('importer')): ?>
                        <li>
                            <button
                                wire:click="$dispatch('openModal', { component: 'product-form', arguments: { product: <?php echo e($product); ?> }})"
                                type="button"
                                class="flex items-center p-3 text-start font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white w-full">
                                <?php echo e(__('Edit')); ?>

                            </button>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /var/www/gkgpack.su/public_html/resources/views/products/search.blade.php ENDPATH**/ ?>