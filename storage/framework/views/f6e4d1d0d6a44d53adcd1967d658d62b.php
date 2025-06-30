<?php if($column->isSortable()): ?>
    <a href="#"
       class="flex items-center gap-1 font-bold text-md px-3 py-2 whitespace-nowrap"
       wire:click.prevent="sort('<?php echo e($column->code()); ?>')">
        <span><?php echo e($column->label()); ?></span>
        <?php if(! $this->isReordering()): ?>
            <?php if($this->sortColumn === $column->code()): ?>
                <?php if($this->sortDirection === 'asc'): ?>
                    <!-- Icon "chevron-up" (outline) from https://heroicons.com -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                    </svg>
                <?php else: ?>
                    <!-- Icon "chevron-down" (outline) from https://heroicons.com -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                <?php endif; ?>
            <?php else: ?>
                <!-- Icon "chevron-up-down" (outline) from https://heroicons.com -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 opacity-50">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                </svg>
            <?php endif; ?>
        <?php endif; ?>
    </a>
<?php else: ?>
    <span class="flex font-bold text-md px-3 py-2 whitespace-nowrap"><?php echo e($column->label()); ?></span>
<?php endif; ?>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/vendor/ramonrietdijk/livewire-tables/resources/views/columns/header/default.blade.php ENDPATH**/ ?>