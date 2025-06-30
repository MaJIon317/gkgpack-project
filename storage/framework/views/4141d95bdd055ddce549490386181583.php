<div class="flex flex-col gap-3">
    <div class="flex flex-col lg:flex-row gap-3">
        <?php echo $__env->renderWhen($this->canSearch(), 'livewire-table::bar.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
        <div class="justify-center items-center w-full border-y border-transparent" wire:loading.flex>
            <span class="inline-block border border-4 border-blue-500 border-r-transparent motion-safe:animate-spin rounded-full my-2 p-2"></span>
        </div>
        <?php echo $__env->make('livewire-table::bar.selection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="flex gap-3 ml-auto">
            <?php echo $__env->renderWhen($this->useReordering, 'livewire-table::bar.buttons.reordering', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
            <?php echo $__env->make('livewire-table::bar.dropdowns.polling', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('livewire-table::bar.dropdowns.columns', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('livewire-table::bar.dropdowns.filters', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('livewire-table::bar.dropdowns.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('livewire-table::bar.dropdowns.trashed', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <select wire:model.live="perPage"
                    class="border border-neutral-200 shadow-sm rounded-md outline-none focus:border-blue-300 px-3 py-2 bg-white text-black transition ease-in-out dark:bg-neutral-800 dark:border-neutral-700 dark:focus:border-blue-600 dark:text-white">
                <?php $__currentLoopData = $perPageOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perPage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($perPage); ?>"><?php echo e($perPage); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
</div>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/vendor/livewire-table/bar/bar.blade.php ENDPATH**/ ?>