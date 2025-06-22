<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'message' => false,
]));

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

foreach (array_filter(([
    'message' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php if($message || $slot): ?>
    <a 
            class="flex items-center justify-center gap-2 cursor-pointer rounded-lg border border-primary bg-primary px-6 py-3 font-medium text-center bg-indigo-600 text-white hover:bg-indigo-500 transition hover:bg-opacity-90"
            <?php echo e($attributes); ?>

            wire:navigate
        >

        <?php echo e($slot); ?>


        <?php echo e($message); ?>

    </a>
<?php endif; ?>

<?php /**PATH /var/www/gkgpack.su/public_html/resources/views/components/a.blade.php ENDPATH**/ ?>