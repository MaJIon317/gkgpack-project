<div class="px-3 py-1">
    <input type="search"
           class="min-w-full border border-neutral-200 rounded-md shadow-sm outline-none bg-white text-black focus:border-blue-300 mr-auto px-2 py-1 font-normal transition ease-in-out dark:bg-neutral-900 dark:border-neutral-700 dark:focus:border-blue-600 dark:text-white h-8"
           placeholder="<?php echo app('translator')->get('Search...'); ?>"
           wire:model.live.debounce.500ms="search.<?php echo e($column->code()); ?>">
</div>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/vendor/ramonrietdijk/livewire-tables/resources/views/columns/search/default.blade.php ENDPATH**/ ?>