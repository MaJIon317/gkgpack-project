<?php if($table['columns']->isNotEmpty()): ?>
    <?php if (isset($component)) { $__componentOriginal37748d67462940dfd38cd0cb6538c8fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal37748d67462940dfd38cd0cb6538c8fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-table::components.dropdown','data' => ['label' => ''.e(__('Columns')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('livewire-table::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(__('Columns')).'']); ?>
         <?php $__env->slot('icon', null, []); ?> 
            <!-- Icon "view-columns" (outline) from https://heroicons.com -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 4.5v15m6-15v15m-10.875 0h15.75c.621 0 1.125-.504 1.125-1.125V5.625c0-.621-.504-1.125-1.125-1.125H4.125C3.504 4.5 3 5.004 3 5.625v12.75c0 .621.504 1.125 1.125 1.125z" />
            </svg>
         <?php $__env->endSlot(); ?>
        <span
            class="flex gap-2 px-3 py-2 font-bold text-xs uppercase border-b border-neutral-200 bg-neutral-50 text-neutral-500 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
            <span class="mr-auto"><?php echo app('translator')->get('Columns'); ?></span>
            <a href="#" class="text-blue-500" wire:click.prevent="selectAllColumns(true)">
                <?php echo app('translator')->get('All'); ?>
            </a>
            <a href="#" class="text-blue-500" wire:click.prevent="selectAllColumns(false)">
                <?php echo app('translator')->get('None'); ?>
            </a>
        </span>
        <?php $__currentLoopData = $table['columns']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <label
                wire:key="<?php echo e($column->code()); ?>"
                class="flex items-center gap-2 px-3 py-1 cursor-pointer"
                draggable="true"
                x-on:dragstart="e => e.dataTransfer.setData('code', '<?php echo e($column->code()); ?>')"
                x-on:dragover.prevent=""
                x-on:drop="e => {
                    $wire.call(
                        'reorderColumn',
                        e.dataTransfer.getData('code'),
                        '<?php echo e($column->code()); ?>',
                        e.target.offsetHeight / 2 > e.offsetY
                    )
                }"
            >
                <input type="checkbox" class="size-4" value="<?php echo e($column->code()); ?>" wire:model.live="columns">
                <span class="truncate" title="<?php echo e($column->label()); ?>"><?php echo e($column->label()); ?></span>
            </label>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/vendor/livewire-table/bar/dropdowns/columns.blade.php ENDPATH**/ ?>