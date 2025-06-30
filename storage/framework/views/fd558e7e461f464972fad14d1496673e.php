<?php if(count($pollingOptions) > 0): ?>
    <?php if (isset($component)) { $__componentOriginal37748d67462940dfd38cd0cb6538c8fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal37748d67462940dfd38cd0cb6538c8fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-table::components.dropdown','data' => ['label' => ''.e(__('Polling')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('livewire-table::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(__('Polling')).'']); ?>
         <?php $__env->slot('icon', null, []); ?> 
            <!-- Icon "arrow-path" (outline) from https://heroicons.com -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
            </svg>
         <?php $__env->endSlot(); ?>
        <span
            class="flex px-3 py-2 font-bold text-xs uppercase border-b border-neutral-200 bg-neutral-50 text-neutral-500 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
            <?php echo app('translator')->get('Polling'); ?>
        </span>
        <div class="flex flex-col">
            <div class="px-3 py-2">
                <span class="block whitespace-nowrap truncate" title="<?php echo app('translator')->get('Refresh records'); ?>">
                    <?php echo app('translator')->get('Refresh records'); ?>
                </span>
                <select
                    class="w-full border border-neutral-200 rounded-md shadow-sm outline-none bg-white text-black focus:border-blue-300 mr-auto px-3 py-2 font-normal transition ease-in-out dark:bg-neutral-900 dark:border-neutral-700 dark:focus:border-blue-600 dark:text-white"
                    wire:model.live="polling">
                    <?php $__currentLoopData = $pollingOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>"><?php echo app('translator')->get($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal37748d67462940dfd38cd0cb6538c8fb)): ?>
<?php $attributes = $__attributesOriginal37748d67462940dfd38cd0cb6538c8fb; ?>
<?php unset($__attributesOriginal37748d67462940dfd38cd0cb6538c8fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal37748d67462940dfd38cd0cb6538c8fb)): ?>
<?php $component = $__componentOriginal37748d67462940dfd38cd0cb6538c8fb; ?>
<?php unset($__componentOriginal37748d67462940dfd38cd0cb6538c8fb); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/vendor/livewire-table/bar/dropdowns/polling.blade.php ENDPATH**/ ?>