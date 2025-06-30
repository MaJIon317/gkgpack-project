<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['active' => false]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['active' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<button
    <?php echo e($attributes->class([
            'flex items-center gap-1 relative px-3 py-2 bg-white border transition ease-in-out rounded-md shadow-sm h-full text-sm' => true,
            'active:bg-neutral-100 dark:bg-neutral-800 dark:active:bg-neutral-900' => true,
            'border-neutral-200 text-neutral-800 hover:text-neutral-500 focus:border-blue-300 active:text-neutral-800 dark:border-neutral-700 dark:focus:border-blue-600 dark:text-neutral-300 dark:hover:text-white dark:focus:border-blue-600 dark:active:text-white' => ! $active,
            'border-blue-300 text-blue-500 dark:border-blue-600 dark:text-blue-500' => $active,
        ])); ?>

>
    <?php echo e($slot); ?>

    <?php if($active): ?>
        <span class="absolute -right-1 -top-1 rounded-full shadow-sm bg-blue-500 dark:bg-blue-600 block size-2.5"></span>
    <?php endif; ?>
</button>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/vendor/ramonrietdijk/livewire-tables/resources/views/components/button.blade.php ENDPATH**/ ?>