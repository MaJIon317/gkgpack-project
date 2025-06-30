<div class="flex gap-3">
    <input type="search"
        placeholder="<?php echo app('translator')->get('Search all columns...'); ?>"
        class="w-full md:w-64 border border-neutral-200 shadow-sm rounded-md outline-none focus:border-blue-300 px-3 py-2 bg-white text-black transition ease-in-out dark:bg-neutral-800 dark:border-neutral-700 dark:focus:border-blue-600 dark:text-white"
        wire:model.live.debounce.500ms="globalSearch">
    <?php echo $__env->renderWhen($this->canClearSearch(), 'livewire-table::bar.buttons.clear-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
</div>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/vendor/livewire-table/bar/search.blade.php ENDPATH**/ ?>