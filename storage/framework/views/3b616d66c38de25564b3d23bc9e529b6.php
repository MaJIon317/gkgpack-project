<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'label' => '',
    'name' => null,
    'required' => false,
    'disabled' => false,
    'selected' => null,
    'classBlock' => null,
    'tooltip' => null
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
    'label' => '',
    'name' => null,
    'required' => false,
    'disabled' => false,
    'selected' => null,
    'classBlock' => null,
    'tooltip' => null
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
    $name = !$name ? ($attributes->getAttributes()['wire:model'] ?? fake()->ean13()) : fake()->ean13();
?>

<div class="<?php echo e($classBlock ?? 'mb-4'); ?>">
    <?php if($label): ?>
        <label
            for="input-<?php echo e($name); ?>"
            class="<?php echo e(($required ?? false) ? 'after:content-["*"]' : ''); ?> mb-2.5 block font-medium text-black">
            <?php echo e($label); ?>

        </label>
    <?php endif; ?>

    <select
        name="<?php echo e($name); ?>"
        <?php echo e($disabled ? 'disabled' : ''); ?>

        <?php echo e($attributes->merge(['class' => 'w-full rounded-lg border border-stroke bg-white py-3 pl-3 pr-8 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary'])); ?>>
        <?php echo e($slot); ?>

    </select>

    <?php if($tooltip): ?>
        <p class="mt-2 text-sm" role="alert"><?php echo e($tooltip); ?></p>
    <?php endif; ?> 

    <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/components/fields/select.blade.php ENDPATH**/ ?>