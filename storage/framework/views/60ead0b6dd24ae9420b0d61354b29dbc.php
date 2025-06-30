<div class="px-3 py-2">
    <span class="block whitespace-nowrap truncate" title="<?php echo e($filter->label()); ?>">
        <?php echo e($filter->label()); ?>

    </span>
    <select class="w-full border border-neutral-200 rounded-md shadow-sm outline-none bg-white text-black focus:border-blue-300 mr-auto px-3 py-2 font-normal transition ease-in-out dark:bg-neutral-900 dark:border-neutral-700 dark:focus:border-blue-600 dark:text-white"
            wire:model.live="filters.<?php echo e($filter->code()); ?>">
        <option value="">&mdash;</option>
        <option value="1"><?php echo app('translator')->get('Yes'); ?></option>
        <option value="0"><?php echo app('translator')->get('No'); ?></option>
    </select>
</div>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/vendor/livewire-table/filters/boolean.blade.php ENDPATH**/ ?>