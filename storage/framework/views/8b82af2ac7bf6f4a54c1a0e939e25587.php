<div class="px-3 py-2">
    <?php if($value === null): ?>
        <div class="mx-auto size-3 border-2 border-neutral-300 rounded-full"></div>
    <?php elseif($value): ?>
        <div class="mx-auto size-3 border-2 border-green-500 rounded-full"></div>
    <?php else: ?>
        <div class="mx-auto size-3 border-2 border-red-500 rounded-full"></div>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/gkgpack.su/public_html/vendor/ramonrietdijk/livewire-tables/resources/views/columns/content/boolean.blade.php ENDPATH**/ ?>