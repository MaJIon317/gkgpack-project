<table class="w-full relative" x-data="{ selected: <?php if ((object) ('selected') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('selected'->value()); ?>')<?php echo e('selected'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('selected'); ?>')<?php endif; ?> }">
    <thead class="border-b border-neutral-200 dark:border-neutral-700">
    <tr class="group">
        <?php if($this->canSelect()): ?>
            <th class="p-0 text-left text-black bg-neutral-50 dark:text-white dark:bg-neutral-800">
                <input type="checkbox" wire:model.live="selectedPage" class="size-4 mx-3">
            </th>
        <?php endif; ?>
        <?php $__currentLoopData = $table['columns']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(! in_array($column->code(), $this->columns)) continue; ?>
            <th class="p-0 text-left text-black bg-neutral-50 dark:text-white dark:bg-neutral-800">
                <?php echo e($column->renderHeader()); ?>

            </th>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tr>
    <tr class="group">
        <?php if($this->canSelect()): ?>
            <th class="p-0 text-left text-black bg-neutral-50 dark:text-white dark:bg-neutral-800"></th>
        <?php endif; ?>
        <?php $__currentLoopData = $table['columns']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(! in_array($column->code(), $this->columns)) continue; ?>
            <th class="p-0 text-left text-black bg-neutral-50 dark:text-white dark:bg-neutral-800">
                <?php if($column->isSearchable()): ?>
                    <?php echo e($column->renderSearch()); ?>

                <?php endif; ?>
            </th>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tr>
    </thead>
    <tbody>
    <?php if($this->deferLoading && ! $this->initialized): ?>
        <tr class="group">
            <td class="p-0" colspan="<?php echo e($table['columns']->count() + 1); ?>">
                <span class="block text-lg text-center py-20 bg-white text-black dark:bg-neutral-900 dark:text-white">
                    <?php echo app('translator')->get('Fetching records...'); ?>
                </span>
            </td>
        </tr>
    <?php else: ?>
        <?php $__empty_1 = true; $__currentLoopData = $paginator->items(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr class="group"
                wire:key="row-<?php echo e($item->getKey()); ?>"

                <?php if($this->isReordering()): ?>
                    draggable="true"
                    x-on:dragstart="e => e.dataTransfer.setData('key', '<?php echo e($item->getKey()); ?>')"
                    x-on:dragover.prevent=""
                    x-on:drop="e => {
                        $wire.call(
                            'reorderItem',
                            e.dataTransfer.getData('key'),
                            '<?php echo e($item->getKey()); ?>',
                            e.target.offsetHeight / 2 > e.offsetY
                        )
                    }"
                <?php endif; ?>
            >
                <?php if($this->canSelect()): ?>
                    <td class="p-0"
                        x-bind:class="~selected.indexOf('<?php echo e($item->getKey()); ?>')
                                ? 'bg-blue-100 group-odd:bg-blue-100 group-hover:bg-blue-200 dark:bg-blue-900 dark:group-odd:bg-blue-900 dark:group-hover:bg-blue-800'
                                : 'bg-neutral-100 group-odd:bg-white group-hover:bg-neutral-200 dark:bg-neutral-800 dark:group-odd:bg-neutral-900 dark:group-hover:bg-neutral-700'">
                        <div class="mx-3">
                            <input type="checkbox" wire:model.live="selected" value="<?php echo e($item->getKey()); ?>" class="size-4">
                        </div>
                    </td>
                <?php endif; ?>
                <?php $__currentLoopData = $table['columns']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(! in_array($column->code(), $this->columns)) continue; ?>
                    <td class="p-0"
                        <?php if($column->isClickable() && ! $this->isReordering()): ?>
                            <?php if(($link = $this->link($item)) !== null): ?>
                                x-on:click.prevent="window.location.href = '<?php echo e($link); ?>'"
                            <?php elseif($this->canSelect()): ?>
                                x-on:click="$wire.selectItem('<?php echo e($item->getKey()); ?>')"
                            <?php endif; ?>
                        <?php endif; ?>
                        x-bind:class="~selected.indexOf('<?php echo e($item->getKey()); ?>')
                                ? 'select-none cursor-pointer bg-blue-100 group-odd:bg-blue-100 group-hover:bg-blue-200 dark:bg-blue-900 dark:group-odd:bg-blue-900 dark:group-hover:bg-blue-800'
                                : 'select-none cursor-pointer bg-neutral-100 group-odd:bg-white group-hover:bg-neutral-200 dark:bg-neutral-800 dark:group-odd:bg-neutral-900 dark:group-hover:bg-neutral-700'">
                        <?php echo e($column->render($item)); ?>

                    </td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr class="group">
                <td class="p-0" colspan="<?php echo e($table['columns']->count() + 1); ?>">
                    <span class="block text-lg text-center py-20 bg-white text-black dark:bg-neutral-900 dark:text-white">
                        <?php echo app('translator')->get('No results'); ?>
                    </span>
                </td>
            </tr>
        <?php endif; ?>
    <?php endif; ?>
    </tbody>
    <tfoot class="border-t border-neutral-200 dark:border-neutral-700">
    <tr class="group">
        <?php if($this->canSelect()): ?>
            <th class="p-0 text-left text-black bg-neutral-50 dark:text-white dark:bg-neutral-800"></th>
        <?php endif; ?>
        <?php $__currentLoopData = $table['columns']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(! in_array($column->code(), $this->columns)) continue; ?>
            <th class="p-0 text-left text-black bg-neutral-50 dark:text-white dark:bg-neutral-800">
                <?php echo e($column->renderFooter()); ?>

            </th>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tr>
    </tfoot>
</table>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/vendor/ramonrietdijk/livewire-tables/resources/views/table/table.blade.php ENDPATH**/ ?>