<div class="flex flex-col gap-3 relative"
    wire:init="init"
    <?php if(strlen($polling = $this->polling()) > 0): ?> wire:poll.<?php echo e($polling); ?> <?php endif; ?>
>
    <?php echo $__env->make('livewire-table::bar.bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div
        class="overflow-x-auto bg-white border border-neutral-200 dark:bg-neutral-900 dark:border-neutral-700 shadow-sm rounded-md overscroll-x-none">
        <?php echo $__env->make('livewire-table::table.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php echo e($paginator->links('livewire-table::pagination.pagination')); ?>

</div>
<?php /**PATH /var/www/gkgpack.su/public_html/resources/views/vendor/livewire-table/livewire/livewire-table.blade.php ENDPATH**/ ?>