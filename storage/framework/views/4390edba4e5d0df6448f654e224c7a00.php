<?php if (isset($component)) { $__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form','data' => ['submit' => ''.e($product ? 'update' : 'store').'','class' => 'col-span-5 xl:col-span-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['submit' => ''.e($product ? 'update' : 'store').'','class' => 'col-span-5 xl:col-span-3']); ?>

     <?php $__env->slot('title', null, []); ?> 
        <?php echo e($product ? __('Edit product, :name', ['name' => $product->name]) : __('Create product')); ?>

     <?php $__env->endSlot(); ?>

     <?php $__env->slot('form', null, []); ?> 

        <div class="grid grid-cols-5 gap-8">
            <div class="col-span-5 xl:col-span-3">

                <?php if (isset($component)) { $__componentOriginal7c77957f192c8a2b4a70a19cf12e7282 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.text','data' => ['name' => 'name','wire:model' => 'name','label' => ''.e(__('Name')).'','placeholder' => ''.e(__('Enter the name')).'','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'name','wire:model' => 'name','label' => ''.e(__('Name')).'','placeholder' => ''.e(__('Enter the name')).'','required' => true]); ?>
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

                <div class="w-full mb-5">
                    <div class="w-full relative">
                        <label class="relative block leading-tight bg-white hover:bg-gray-100 cursor-pointer inline-flex items-center transition duration-500 ease-in-out group overflow-hidden border-2 w-full pl-3 pr-4 py-2 rounded-lg border-dashed">
                            <div class="flex items-center justify-center flex-1 px-4 py-2" wire:loading.class="hidden" wire:target="name">
                                <svg class="h-8 w-8 text-gray-300 group-hover:text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                                    <rect width="256" height="256" fill="none"></rect>
                                    <path d="M168.001,100.00017v.00341a12.00175,12.00175,0,1,1,0-.00341ZM232,56V200a16.01835,16.01835,0,0,1-16,16H40a16.01835,16.01835,0,0,1-16-16V56A16.01835,16.01835,0,0,1,40,40H216A16.01835,16.01835,0,0,1,232,56Zm-15.9917,108.6936L216,56H40v92.68575L76.68652,112.0002a16.01892,16.01892,0,0,1,22.62793,0L144.001,156.68685l20.68554-20.68658a16.01891,16.01891,0,0,1,22.62793,0Z"></path>
                                </svg>
                                <span class="ml-2 text-gray-600"><?php echo e(__('Upload Images')); ?> | <span class="text-sm"><?php echo e(implode(__(' or '), ['PNG', 'JPEG'])); ?></span></span>
                            </div>
                            <input type="file" class="hidden" wire:model="imageup" accept="image/*" multiple />
                        </label>

                        <div class="text-center absolute inset-0 flex justify-center items-center imageup-loader" style="background: #ffffff8c; visibility: hidden;">
                            <div role="status">
                                <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                </svg>
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>

                    <div class="w-full bg-gray-200 rounded-full mt-1 h-2.5 dark:bg-gray-700 imageup-progress" style="visibility: hidden;">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 0%"></div>
                    </div>

                    <?php if($images): ?>
                        <div class="flex flex-wrap gap-3 mt-5">
                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="relative inline-block">
                                    <?php if (isset($component)) { $__componentOriginal22d447e3f5aafc93b8447b54b36ee789 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal22d447e3f5aafc93b8447b54b36ee789 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image','data' => ['class' => 'w-[90px] h-[90px] border rounded-lg','src' => ''.e(isset($image->path) ? asset('storage/' . $image->path) : str_replace('livewire/preview-file', 'storage/livewire-tmp', $image->temporaryUrl())).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-[90px] h-[90px] border rounded-lg','src' => ''.e(isset($image->path) ? asset('storage/' . $image->path) : str_replace('livewire/preview-file', 'storage/livewire-tmp', $image->temporaryUrl())).'']); ?>
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
                                    <button type="button"
                                        wire:click="removeImage(<?php echo e($key); ?>)"
                                        class="absolute top-0 end-0 block rounded-full transform -translate-y-1/2 translate-x-1/2 ring-2 ring-white bg-white dark:ring-neutral-900 text-indigo-400 hover:text-indigo-700">

                                        <svg class="fill-current" width="16" height="16" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.7535 2.47502H11.5879V1.9969C11.5879 1.15315 10.9129 0.478149 10.0691 0.478149H7.90352C7.05977 0.478149 6.38477 1.15315 6.38477 1.9969V2.47502H4.21914C3.40352 2.47502 2.72852 3.15002 2.72852 3.96565V4.8094C2.72852 5.42815 3.09414 5.9344 3.62852 6.1594L4.07852 15.4688C4.13477 16.6219 5.09102 17.5219 6.24414 17.5219H11.7004C12.8535 17.5219 13.8098 16.6219 13.866 15.4688L14.3441 6.13127C14.8785 5.90627 15.2441 5.3719 15.2441 4.78127V3.93752C15.2441 3.15002 14.5691 2.47502 13.7535 2.47502ZM7.67852 1.9969C7.67852 1.85627 7.79102 1.74377 7.93164 1.74377H10.0973C10.2379 1.74377 10.3504 1.85627 10.3504 1.9969V2.47502H7.70664V1.9969H7.67852ZM4.02227 3.96565C4.02227 3.85315 4.10664 3.74065 4.24727 3.74065H13.7535C13.866 3.74065 13.9785 3.82502 13.9785 3.96565V4.8094C13.9785 4.9219 13.8941 5.0344 13.7535 5.0344H4.24727C4.13477 5.0344 4.02227 4.95002 4.02227 4.8094V3.96565ZM11.7285 16.2563H6.27227C5.79414 16.2563 5.40039 15.8906 5.37227 15.3844L4.95039 6.2719H13.0785L12.6566 15.3844C12.6004 15.8625 12.2066 16.2563 11.7285 16.2563Z" fill=""></path>
                                            <path d="M9.00039 9.11255C8.66289 9.11255 8.35352 9.3938 8.35352 9.75942V13.3313C8.35352 13.6688 8.63477 13.9782 9.00039 13.9782C9.33789 13.9782 9.64727 13.6969 9.64727 13.3313V9.75942C9.64727 9.3938 9.33789 9.11255 9.00039 9.11255Z" fill=""></path>
                                            <path d="M11.2502 9.67504C10.8846 9.64692 10.6033 9.90004 10.5752 10.2657L10.4064 12.7407C10.3783 13.0782 10.6314 13.3875 10.9971 13.4157C11.0252 13.4157 11.0252 13.4157 11.0533 13.4157C11.3908 13.4157 11.6721 13.1625 11.6721 12.825L11.8408 10.35C11.8408 9.98442 11.5877 9.70317 11.2502 9.67504Z" fill=""></path><path d="M6.72245 9.67504C6.38495 9.70317 6.1037 10.0125 6.13182 10.35L6.3287 12.825C6.35683 13.1625 6.63808 13.4157 6.94745 13.4157C6.97558 13.4157 6.97558 13.4157 7.0037 13.4157C7.3412 13.3875 7.62245 13.0782 7.59433 12.7407L7.39745 10.2657C7.39745 9.90004 7.08808 9.64692 6.72245 9.67504Z" fill=""></path>
                                        </svg>
                                    </button>
                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <?php if (isset($component)) { $__componentOriginal7c77957f192c8a2b4a70a19cf12e7282 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.text','data' => ['name' => 'sku','wire:model' => 'sku','label' => ''.e(__('SKU')).'','placeholder' => ''.e(__('Enter the sku')).'','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'sku','wire:model' => 'sku','label' => ''.e(__('SKU')).'','placeholder' => ''.e(__('Enter the sku')).'','required' => true]); ?>
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

                <?php if (isset($component)) { $__componentOriginal7c77957f192c8a2b4a70a19cf12e7282 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.text','data' => ['name' => 'barcode','wire:model' => 'barcode','wire:model.live' => 'barcode','label' => ''.e(__('Barcode')).'','placeholder' => ''.e(__('Enter the barcode')).'','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'barcode','wire:model' => 'barcode','wire:model.live' => 'barcode','label' => ''.e(__('Barcode')).'','placeholder' => ''.e(__('Enter the barcode')).'','required' => true]); ?>
                     <?php $__env->slot('buttons', null, []); ?> 

                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('scanner', ['scanner' => $scanner = rand(0, 1000000)]);

$__html = app('livewire')->mount($__name, $__params, 'lw-4044797725-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                                <?php
        $__scriptKey = '4044797725-0';
        ob_start();
    ?>
                                <script>
                                    Livewire.on('barcodeResult<?php echo e($scanner); ?>', ($this) => {
                                        $wire.barcode = $this.result;
                                        scannerDisconnect()
                                    })
                                </script>
                                <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?>
                        </livewire:scanner>

                     <?php $__env->endSlot(); ?>

                    <button type="button" class="text-indigo-400 hover:text-indigo-700 text-xs" wire:click="barcodeGenerator">
                        <?php echo e(__('Generate')); ?>

                    </button>
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


                <?php if($duplicates->count()): ?>
                    <div class="flex flex-col gap-2 p-3 border border-red-600 rounded mb-4">

                        <h3 class="font-bold text-black mb-2 flex flex-wrap gap-2 justify-between w-full">
                            <span class="inline-flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z"/>
                                </svg>
                                <?php echo e(__('Duplicates')); ?>

                            </span>
                        </h3>

                        <?php $__currentLoopData = $duplicates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duplicate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex-1 flex flex-col w-full border p-3 rounded">

                                <div class="w-full flex flex-col sm:flex sm:flex-row sm:items-center gap-3">
                                    <?php if($duplicate->images()->first()): ?>
                                        <?php if (isset($component)) { $__componentOriginal22d447e3f5aafc93b8447b54b36ee789 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal22d447e3f5aafc93b8447b54b36ee789 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image','data' => ['src' => ''.e(asset('storage/' . $duplicate->images()->first()->path)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e(asset('storage/' . $duplicate->images()->first()->path)).'']); ?>
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

                                    <h2 class="sm:text-xl leading-snug font-extrabold pr-[55px] mr-auto"><?php echo e($duplicate->name); ?></h2>
                                    <small class="flex flex-col gap-1 leading-none min-w-max">
                                        <span class="col">
                                            <strong><?php echo e(__('Sku')); ?>:</strong>
                                            <span><?php echo e($duplicate->sku); ?></span>
                                        </span>
                                                    <span class="col">
                                            <strong><?php echo e(__('Barcode')); ?>:</strong>
                                            <span><?php echo e($duplicate->barcode); ?></span>
                                        </span>
                                    </small>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                <?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal7c77957f192c8a2b4a70a19cf12e7282 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.text','data' => ['name' => 'section','wire:model' => 'section','label' => ''.e(__('Section')).'','placeholder' => ''.e(__('Enter the section')).'','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'section','wire:model' => 'section','label' => ''.e(__('Section')).'','placeholder' => ''.e(__('Enter the section')).'','required' => true]); ?>
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

            </div>
            <div class="col-span-5 xl:col-span-2">
                <h3 class="font-medium text-black text-xl"><?php echo e(__('Stock availability')); ?></h3>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                   <?php echo e(__('Inventory balances can only be managed when adding a new product.')); ?>

                </p>

                <div class="flex flex-col gap-5">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                          <table class="min-w-full text-left text-sm font-light text-surface dark:text-white">

                            <tbody>
                                <?php $__currentLoopData = $warehouses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warehouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="border-b border-neutral-200 dark:border-white/10">
                                        <td class="whitespace-nowrap py-2 font-medium"><?php echo e($warehouse->name); ?></td>
                                        <td class="whitespace-nowrap py-2 text-right">
                                            <?php if(!$product): ?>
                                                <div class="py-2 px-3 bg-gray-100 rounded-lg dark:bg-neutral-700">
                                                    <div class="w-full flex justify-between items-center gap-x-5">
                                                        <input type="number" wire:model="stocks.<?php echo e($warehouse->id); ?>" value="0" class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none dark:text-white">
                                                    </div>
                                                </div>
                                            <?php else: ?>
                                                <span title="<?php echo e(__('Stock')); ?>" class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-gray-700 dark:text-gray-300">
                                                    <?php echo e($product->stocks()->where('warehouse_id', $warehouse->id)->where('reserve', false)->sum('qty')); ?>

                                                </span>

                                                <span title="<?php echo e(__('Current stock')); ?>" class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300">
                                                    <?php echo e($product->stocks()->where('warehouse_id', $warehouse->id)->sum('qty')); ?>

                                                </span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>


                    <?php if($product): ?>
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
                                    class="flex items-center p-3 text-start font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow w-full">
                                    <?php echo e(__('Stock-Out')); ?>

                                </button>
                            </li>
                        </ul>
                    <?php endif; ?>

                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.history', ['object' => $product]);

$__html = app('livewire')->mount($__name, $__params, 'lw-4044797725-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

                </div>

            </div>
        </div>



     <?php $__env->endSlot(); ?>

     <?php $__env->slot('actions', null, []); ?> 
        <?php if($product): ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['type' => 'submit','message' => ''.e(__('Commit')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','message' => ''.e(__('Commit')).'']); ?>
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

    <?php
        $__scriptKey = '4044797725-1';
        ob_start();
    ?>
<script>
    let imageUpload = $wire.el.querySelector('input[type="file"]')
    let imageUploadLoader = $wire.el.querySelector('.imageup-loader')
    let imageUploadProgress = $wire.el.querySelector('.imageup-progress')

    imageUpload.onchange = function() {
        let files = this.files;

        $wire.uploadMultiple('imageup', files, (uploadedFilename) => {
            imageUploadLoader.style.visibility='visible'
            imageUploadProgress.style.visibility='visible'

            $wire.uploadImage(files)
        }, (errorCallback) => {
            toast('Error upload', 'error')

            toast(JSON.stringify(errorCallback), 'error')
        }, (event) => {
            let progress = event.detail.progress || 0

            imageUploadLoader.style.visibility='visible'
            imageUploadProgress.style.visibility='visible'

            imageUploadProgress.querySelector('div').style.width = `${progress}%`
            // Progress callback...
            // event.detail.progress contains a number between 1 and 100 as the upload progresses
        }, () => {
        })
    };

</script>
    <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/products/form.blade.php ENDPATH**/ ?>