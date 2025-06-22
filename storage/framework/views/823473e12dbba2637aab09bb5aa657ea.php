<div class="px-3 py-1">
    <?php if($value): ?>
        <img
            class="max-w-none"
            src="<?php echo e($value); ?>"
            alt="<?php echo e($column->label()); ?>"
            width="<?php echo e($column->getWidth()); ?>"
            height="<?php echo e($column->getHeight()); ?>"
        >
    <?php endif; ?>
</div>
<?php /**PATH /var/www/gkgpack.su/public_html/vendor/ramonrietdijk/livewire-tables/resources/views/columns/content/image.blade.php ENDPATH**/ ?>