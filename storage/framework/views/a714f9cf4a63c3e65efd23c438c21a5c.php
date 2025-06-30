<div class="px-3 py-2">
    <span class="block whitespace-nowrap truncate" title="<?php echo e($filter->label()); ?>">
        <?php echo e($filter->label()); ?>

    </span>
    <select class="w-full border border-neutral-200 rounded-md shadow-sm outline-none bg-white text-black focus:border-blue-300 mr-auto px-3 py-2 font-normal transition ease-in-out dark:bg-neutral-900 dark:border-neutral-700 dark:focus:border-blue-600 dark:text-white"
            wire:model.live="filters.<?php echo e($filter->code()); ?>"

            <?php if($filter->isMultiple()): ?>
                multiple
            <?php endif; ?>
        >
        <?php if(! $filter->isMultiple()): ?>
            <option value="">&mdash;</option>
        <?php endif; ?>
        <?php $__currentLoopData = $filter->getOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(is_array($value)): ?>
                <optgroup label="<?php echo e($key); ?>">
                    <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </optgroup>
            <?php else: ?>
                <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/vendor/livewire-table/filters/select.blade.php ENDPATH**/ ?>