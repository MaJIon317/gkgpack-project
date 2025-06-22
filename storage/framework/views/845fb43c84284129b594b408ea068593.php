<?php if($this->hasSoftDeletes()): ?>
    <?php if (isset($component)) { $__componentOriginal37748d67462940dfd38cd0cb6538c8fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal37748d67462940dfd38cd0cb6538c8fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-table::components.dropdown','data' => ['label' => ''.e(__('Trashed')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('livewire-table::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(__('Trashed')).'']); ?>
         <?php $__env->slot('icon', null, []); ?> 
            <!-- Icon "trash" (outline) from https://heroicons.com -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
            </svg>
         <?php $__env->endSlot(); ?>
        <span
            class="flex px-3 py-2 font-bold text-xs uppercase border-b border-neutral-200 bg-neutral-50 text-neutral-500 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
            <?php echo app('translator')->get('Trashed'); ?>
        </span>
        <div class="flex flex-col">
            <div class="px-3 py-2">
                <span class="block whitespace-nowrap truncate" title="<?php echo app('translator')->get('Show'); ?>">
                    <?php echo app('translator')->get('Show'); ?>
                </span>
                <select
                    class="w-full border border-neutral-200 rounded-md shadow-sm outline-none bg-white text-black focus:border-blue-300 mr-auto px-3 py-2 font-normal transition ease-in-out dark:bg-neutral-900 dark:border-neutral-700 dark:focus:border-blue-600 dark:text-white"
                    wire:model.live="trashed">
                    <option value="withoutTrashed"><?php echo app('translator')->get('Without Trashed'); ?></option>
                    <option value="withTrashed"><?php echo app('translator')->get('With Trashed'); ?></option>
                    <option value="onlyTrashed"><?php echo app('translator')->get('Only Trashed'); ?></option>
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
<?php /**PATH /var/www/gkgpack.su/public_html/resources/views/vendor/livewire-table/bar/dropdowns/trashed.blade.php ENDPATH**/ ?>