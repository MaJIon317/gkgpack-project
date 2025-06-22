<?php if (isset($component)) { $__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form','data' => ['submit' => ''.e($warehouseRegistration ? 'update' : 'store').'','class' => 'col-span-5 xl:col-span-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['submit' => ''.e($warehouseRegistration ? 'update' : 'store').'','class' => 'col-span-5 xl:col-span-3']); ?>

     <?php $__env->slot('title', null, []); ?> 
        <?php echo e($warehouseRegistration ? __('Edit warehouse registration') : __('Create warehouse registration')); ?>

     <?php $__env->endSlot(); ?>

     <?php $__env->slot('form', null, []); ?> 

        <?php if (isset($component)) { $__componentOriginal8c6fd75be2f5a2dc6020af3437ea9a1f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c6fd75be2f5a2dc6020af3437ea9a1f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.select','data' => ['label' => 'Warehouse','wire:model' => 'warehouse_id','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Warehouse','wire:model' => 'warehouse_id','required' => true]); ?>

            <?php $__currentLoopData = $warehouses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warehouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($warehouse->id); ?>" <?php echo e($warehouse_id == $warehouse->id  ? 'selected' : ''); ?>><?php echo e(__($warehouse->name)); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8c6fd75be2f5a2dc6020af3437ea9a1f)): ?>
<?php $attributes = $__attributesOriginal8c6fd75be2f5a2dc6020af3437ea9a1f; ?>
<?php unset($__attributesOriginal8c6fd75be2f5a2dc6020af3437ea9a1f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c6fd75be2f5a2dc6020af3437ea9a1f)): ?>
<?php $component = $__componentOriginal8c6fd75be2f5a2dc6020af3437ea9a1f; ?>
<?php unset($__componentOriginal8c6fd75be2f5a2dc6020af3437ea9a1f); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal420782398cd64eb1ad21669a9c62bf62 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal420782398cd64eb1ad21669a9c62bf62 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.textarea','data' => ['name' => 'note','wire:model' => 'note','label' => ''.e(__('Note')).'','placeholder' => ''.e(__('Enter the note')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'note','wire:model' => 'note','label' => ''.e(__('Note')).'','placeholder' => ''.e(__('Enter the note')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal420782398cd64eb1ad21669a9c62bf62)): ?>
<?php $attributes = $__attributesOriginal420782398cd64eb1ad21669a9c62bf62; ?>
<?php unset($__attributesOriginal420782398cd64eb1ad21669a9c62bf62); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal420782398cd64eb1ad21669a9c62bf62)): ?>
<?php $component = $__componentOriginal420782398cd64eb1ad21669a9c62bf62; ?>
<?php unset($__componentOriginal420782398cd64eb1ad21669a9c62bf62); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal7c77957f192c8a2b4a70a19cf12e7282 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.text','data' => ['name' => 'search','label' => ''.e(__('Adding products')).'','wire:model' => 'search','wire:keyup.debounce.300ms' => 'searchProducts','placeholder' => ''.e(__('Enter to add the product')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'search','label' => ''.e(__('Adding products')).'','wire:model' => 'search','wire:keyup.debounce.300ms' => 'searchProducts','placeholder' => ''.e(__('Enter to add the product')).'']); ?>
             <?php $__env->slot('buttons', null, []); ?> 
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('scanner', ['scanner' => $scanner = rand(0, 1000000)]);

$__html = app('livewire')->mount($__name, $__params, 'lw-99161752-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                        <?php
        $__scriptKey = '99161752-0';
        ob_start();
    ?>
                        <script>
                            Livewire.on('barcodeResult<?php echo e($scanner); ?>', ($this) => {
                                let test = $wire.searchBarcode($this.result);
                            })
                        </script>
                        <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?>
                </livewire:scanner>
             <?php $__env->endSlot(); ?>

            <?php if($searchResults->count()): ?>
                <div class="relative w-full">
                    <div class="absolute z-10 w-full bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 overflow-x-auto max-h-[300px]">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <?php $__currentLoopData = $searchResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <button type="button" wire:click="addProduct(<?php echo e($product); ?>)" class="block w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <?php echo e($product->name); ?>

                                        <small>
                                            <span>
                                                <strong><?php echo e(__('Sku')); ?>:</strong>
                                                <span><?php echo e($product->sku); ?></span>
                                            </span>
                                            <span>
                                                <strong><?php echo e(__('Barcode')); ?>:</strong>
                                                <span><?php echo e($product->barcode); ?></span>
                                            </span>
                                        </small>
                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282)): ?>
<?php $attributes = $__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282; ?>
<?php unset($__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c77957f192c8a2b4a70a19cf12e7282)): ?>
<?php $component = $__componentOriginal7c77957f192c8a2b4a70a19cf12e7282; ?>
<?php unset($__componentOriginal7c77957f192c8a2b4a70a19cf12e7282); ?>
<?php endif; ?>

        <?php if($products->count()): ?>
            <?php if (isset($component)) { $__componentOriginale65028f122855c5652ad9216311040cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale65028f122855c5652ad9216311040cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('thead', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['tag' => 'th','class' => 'min-w-[180px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'th','class' => 'min-w-[180px]']); ?><?php echo e(__('Product')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $attributes = $__attributesOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__attributesOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $component = $__componentOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__componentOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['tag' => 'th','class' => 'min-w-[100px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'th','class' => 'min-w-[100px]']); ?><?php echo e(__('Qty')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $attributes = $__attributesOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__attributesOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $component = $__componentOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__componentOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['tag' => 'th','class' => 'min-w-[100px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'th','class' => 'min-w-[100px]']); ?><?php echo e(__('Stock')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $attributes = $__attributesOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__attributesOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $component = $__componentOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__componentOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['tag' => 'th','class' => 'min-w-[80px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'th','class' => 'min-w-[80px]']); ?><?php echo e(__('Section')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $attributes = $__attributesOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__attributesOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $component = $__componentOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__componentOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['tag' => 'th']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'th']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $attributes = $__attributesOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__attributesOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $component = $__componentOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__componentOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
                 <?php $__env->endSlot(); ?>

                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <div class="flex gap-3">
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
                                <div class="flex flex-col gap-2">
                                    <?php echo e($product->name); ?>


                                    <small class="flex flex-col">
                                        <span class="col">
                                            <strong><?php echo e(__('Sku')); ?>:</strong>
                                            <span><?php echo e($product->sku); ?></span>
                                        </span>
                                        <span class="col">
                                            <strong><?php echo e(__('Barcode')); ?>:</strong>
                                            <span><?php echo e($product->barcode); ?></span>
                                        </span>
                                    </small>
                                </div>
                            </div>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $attributes = $__attributesOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__attributesOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $component = $__componentOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__componentOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php if (isset($component)) { $__componentOriginal7c77957f192c8a2b4a70a19cf12e7282 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.text','data' => ['classBlock' => '','wire:model' => 'data.'.e($product->id).'.qty','placeholder' => ''.e(__('Qty')).'','value' => ''.e($data[$product->id]['qty'] ?? 1).'','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['classBlock' => '','wire:model' => 'data.'.e($product->id).'.qty','placeholder' => ''.e(__('Qty')).'','value' => ''.e($data[$product->id]['qty'] ?? 1).'','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282)): ?>
<?php $attributes = $__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282; ?>
<?php unset($__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c77957f192c8a2b4a70a19cf12e7282)): ?>
<?php $component = $__componentOriginal7c77957f192c8a2b4a70a19cf12e7282; ?>
<?php unset($__componentOriginal7c77957f192c8a2b4a70a19cf12e7282); ?>
<?php endif; ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $attributes = $__attributesOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__attributesOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $component = $__componentOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__componentOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php echo e($product->stocks()->where('warehouse_id', $warehouse_id)->where(function ($query) use ($warehouseRegistration) {
                                if ($warehouseRegistration) {
                                    $query->whereNot('warehouse_registration_id', $warehouseRegistration->id)
                                        ->orWhere('warehouse_registration_id', null);
                                }
                            })->sum('qty')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $attributes = $__attributesOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__attributesOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $component = $__componentOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__componentOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php if (isset($component)) { $__componentOriginal7c77957f192c8a2b4a70a19cf12e7282 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.text','data' => ['classBlock' => '','wire:model' => 'data.'.e($product->id).'.section','wire:change' => 'updateSection('.e($product).', $event.target.value)','placeholder' => ''.e(__('Section')).'','value' => ''.e($product->section).'','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['classBlock' => '','wire:model' => 'data.'.e($product->id).'.section','wire:change' => 'updateSection('.e($product).', $event.target.value)','placeholder' => ''.e(__('Section')).'','value' => ''.e($product->section).'','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282)): ?>
<?php $attributes = $__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282; ?>
<?php unset($__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c77957f192c8a2b4a70a19cf12e7282)): ?>
<?php $component = $__componentOriginal7c77957f192c8a2b4a70a19cf12e7282; ?>
<?php unset($__componentOriginal7c77957f192c8a2b4a70a19cf12e7282); ?>
<?php endif; ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $attributes = $__attributesOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__attributesOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $component = $__componentOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__componentOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['class' => 'w-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-1']); ?>
                            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['color' => 'a','wire:click' => 'delete('.e($product).')','title' => ''.e(__('Delete')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'a','wire:click' => 'delete('.e($product).')','title' => ''.e(__('Delete')).'']); ?>
                                <svg class="fill-current" width="20" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7535 2.47502H11.5879V1.9969C11.5879 1.15315 10.9129 0.478149 10.0691 0.478149H7.90352C7.05977 0.478149 6.38477 1.15315 6.38477 1.9969V2.47502H4.21914C3.40352 2.47502 2.72852 3.15002 2.72852 3.96565V4.8094C2.72852 5.42815 3.09414 5.9344 3.62852 6.1594L4.07852 15.4688C4.13477 16.6219 5.09102 17.5219 6.24414 17.5219H11.7004C12.8535 17.5219 13.8098 16.6219 13.866 15.4688L14.3441 6.13127C14.8785 5.90627 15.2441 5.3719 15.2441 4.78127V3.93752C15.2441 3.15002 14.5691 2.47502 13.7535 2.47502ZM7.67852 1.9969C7.67852 1.85627 7.79102 1.74377 7.93164 1.74377H10.0973C10.2379 1.74377 10.3504 1.85627 10.3504 1.9969V2.47502H7.70664V1.9969H7.67852ZM4.02227 3.96565C4.02227 3.85315 4.10664 3.74065 4.24727 3.74065H13.7535C13.866 3.74065 13.9785 3.82502 13.9785 3.96565V4.8094C13.9785 4.9219 13.8941 5.0344 13.7535 5.0344H4.24727C4.13477 5.0344 4.02227 4.95002 4.02227 4.8094V3.96565ZM11.7285 16.2563H6.27227C5.79414 16.2563 5.40039 15.8906 5.37227 15.3844L4.95039 6.2719H13.0785L12.6566 15.3844C12.6004 15.8625 12.2066 16.2563 11.7285 16.2563Z" fill=""></path>
                                    <path d="M9.00039 9.11255C8.66289 9.11255 8.35352 9.3938 8.35352 9.75942V13.3313C8.35352 13.6688 8.63477 13.9782 9.00039 13.9782C9.33789 13.9782 9.64727 13.6969 9.64727 13.3313V9.75942C9.64727 9.3938 9.33789 9.11255 9.00039 9.11255Z" fill=""></path>
                                    <path d="M11.2502 9.67504C10.8846 9.64692 10.6033 9.90004 10.5752 10.2657L10.4064 12.7407C10.3783 13.0782 10.6314 13.3875 10.9971 13.4157C11.0252 13.4157 11.0252 13.4157 11.0533 13.4157C11.3908 13.4157 11.6721 13.1625 11.6721 12.825L11.8408 10.35C11.8408 9.98442 11.5877 9.70317 11.2502 9.67504Z" fill=""></path><path d="M6.72245 9.67504C6.38495 9.70317 6.1037 10.0125 6.13182 10.35L6.3287 12.825C6.35683 13.1625 6.63808 13.4157 6.94745 13.4157C6.97558 13.4157 6.97558 13.4157 7.0037 13.4157C7.3412 13.3875 7.62245 13.0782 7.59433 12.7407L7.39745 10.2657C7.39745 9.90004 7.08808 9.64692 6.72245 9.67504Z" fill=""></path>
                                </svg>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $attributes = $__attributesOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__attributesOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $component = $__componentOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__componentOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale65028f122855c5652ad9216311040cc)): ?>
<?php $attributes = $__attributesOriginale65028f122855c5652ad9216311040cc; ?>
<?php unset($__attributesOriginale65028f122855c5652ad9216311040cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale65028f122855c5652ad9216311040cc)): ?>
<?php $component = $__componentOriginale65028f122855c5652ad9216311040cc; ?>
<?php unset($__componentOriginale65028f122855c5652ad9216311040cc); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if($selectedProducts && $selectedProducts->count()): ?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('orderProducts', ['products' => $selectedProducts]);

$__html = app('livewire')->mount($__name, $__params, 'lw-99161752-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php endif; ?>

     <?php $__env->endSlot(); ?>

     <?php $__env->slot('actions', null, []); ?> 
        <?php if($warehouseRegistration): ?>
            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['type' => 'button','color' => 'dark','message' => ''.e(__('DONE')).'','wire:click' => '$dispatch(\'closeModal\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','color' => 'dark','message' => ''.e(__('DONE')).'','wire:click' => '$dispatch(\'closeModal\')']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['type' => 'button','message' => ''.e(__('Commit')).'','wire:click' => ''.e($warehouseRegistration ? 'update' : 'store').'','wire:confirm' => ''.e(__('Please confirm the section')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','message' => ''.e(__('Commit')).'','wire:click' => ''.e($warehouseRegistration ? 'update' : 'store').'','wire:confirm' => ''.e(__('Please confirm the section')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab)): ?>
<?php $attributes = $__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab; ?>
<?php unset($__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab)): ?>
<?php $component = $__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab; ?>
<?php unset($__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab); ?>
<?php endif; ?>
<?php /**PATH /var/www/gkgpack.su/public_html/resources/views/warehouse-registrations/form.blade.php ENDPATH**/ ?>