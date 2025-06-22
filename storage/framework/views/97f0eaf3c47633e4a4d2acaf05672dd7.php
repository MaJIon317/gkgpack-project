<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'tag' => 'td',
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
    'tag' => 'td',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
    $mergeClass = match ($tag) {
      'th' => 'px-4 py-2 border-b-2 border-gray-200 text-left text-sm font-medium text-gray-600 dark:text-gray-500',
      default => 'px-4 py-4 bg-white text-sm border-b border-neutral-200 dark:border-white/10',
    };
?>

<<?php echo e($tag); ?> <?php echo e($attributes->merge(['class' => $mergeClass])); ?>>
    <div class="inline-flex gap-3">
        <?php echo e($slot); ?>

    </div>
</<?php echo e($tag); ?>>
<?php /**PATH /var/www/gkgpack.su/public_html/resources/views/components/table-default-column.blade.php ENDPATH**/ ?>