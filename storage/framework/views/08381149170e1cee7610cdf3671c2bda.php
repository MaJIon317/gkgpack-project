<div class="px-3 py-2 truncate text-black dark:text-white">
    <?php if(($content = $column->getFooterContent()) !== null): ?>
        <?php echo $content; ?>

    <?php else: ?>
        &nbsp;
    <?php endif; ?>
</div>
<?php /**PATH /var/www/gkgpack.su/public_html/resources/views/vendor/livewire-table/columns/footer/default.blade.php ENDPATH**/ ?>