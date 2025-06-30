<div class="px-3 py-2">
    <?php if($value === null): ?>
        <div class="mx-auto size-3 border-2 border-neutral-300 rounded-full"></div>
    <?php elseif($value): ?>
        <div class="mx-auto size-3 border-2 border-green-500 rounded-full"></div>
    <?php else: ?>
        <div class="mx-auto size-3 border-2 border-red-500 rounded-full"></div>
    <?php endif; ?>
</div>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/vendor/livewire-table/columns/content/boolean.blade.php ENDPATH**/ ?>