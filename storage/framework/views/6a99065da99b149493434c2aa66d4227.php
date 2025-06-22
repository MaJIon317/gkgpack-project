<div class="px-3 py-2 truncate text-black dark:text-white">
    <?php if($value === null): ?>
        <span class="opacity-25">&mdash;</span>
    <?php elseif($column->isRaw()): ?>
        <?php echo $value; ?>

    <?php else: ?>
        <?php echo e($value); ?>

    <?php endif; ?>
</div>
<?php /**PATH /var/www/gkgpack.su/public_html/resources/views/vendor/livewire-table/columns/content/default.blade.php ENDPATH**/ ?>