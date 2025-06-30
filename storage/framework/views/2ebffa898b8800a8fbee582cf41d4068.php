<div class="px-3 py-2 truncate text-black dark:text-white">
    <?php if(($content = $column->getFooterContent()) !== null): ?>
        <?php echo $content; ?>

    <?php else: ?>
        &nbsp;
    <?php endif; ?>
</div>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/vendor/ramonrietdijk/livewire-tables/resources/views/columns/footer/default.blade.php ENDPATH**/ ?>