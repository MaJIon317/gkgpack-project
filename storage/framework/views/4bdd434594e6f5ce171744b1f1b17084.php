<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'size' => '',
    'type' => 'button',
    'color' => 'success',
    'class' => false,
    'message' => false,
    'style' => false,
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
    'size' => '',
    'type' => 'button',
    'color' => 'success',
    'class' => false,
    'message' => false,
    'style' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php if($message || $slot): ?>
    <button type="<?php echo e($type); ?>"
            <?php if(!$class): ?>
                <?php if($color == 'dark'): ?>
                    class="flex items-center justify-center gap-2 cursor-pointer rounded-lg border border-primary bg-primary <?php if($size == 'sm'): ?> px-2 py-2 <?php else: ?> px-6 py-3 <?php endif; ?> font-medium text-center bg-gray-900 text-white hover:bg-gray-700 transition hover:bg-opacity-90"
                <?php elseif($color == 'light'): ?>
                    class="flex items-center justify-center gap-2 cursor-pointer rounded-lg border border-primary bg-primary <?php if($size == 'sm'): ?> px-2 py-2 <?php else: ?> px-6 py-3 <?php endif; ?> font-medium text-center bg-white text-gray-700 hover:bg-gray-200 transition hover:bg-opacity-90"
                <?php elseif($color == 'red'): ?>
                    class="flex items-center justify-center gap-2 cursor-pointer rounded-lg border border-primary bg-primary <?php if($size == 'sm'): ?> px-2 py-2 <?php else: ?> px-6 py-3 <?php endif; ?> bg-red-600 text-white font-medium tracking-wide hover:bg-red-500 ml-3"
                <?php elseif($color == 'a'): ?>
                    class="text-indigo-400 hover:text-indigo-700"
                <?php else: ?>
                    class="flex items-center justify-center gap-2 cursor-pointer rounded-lg border border-primary bg-primary <?php if($size == 'sm'): ?> px-2 py-2 <?php else: ?> px-6 py-3 <?php endif; ?> font-medium text-center bg-indigo-600 text-white hover:bg-indigo-500 transition hover:bg-opacity-90"
                <?php endif; ?>
            <?php else: ?>
                class="<?php echo e($class); ?>"
            <?php endif; ?>

            <?php if($style): ?>
                style="<?php echo e($style); ?>"
            <?php endif; ?>

            <?php echo e($attributes); ?>


            wire:loading.attr="disabled"
        >

        <?php if($color != 'a'): ?>
            <svg class="mr-3 -ml-1 size-5 animate-spin text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" wire:loading <?php if($attributes->has('wire:target')): ?> wire:target="<?php echo e($attributes->get('wire:target')); ?>" <?php endif; ?>>
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        <?php endif; ?>

        <?php echo e($slot); ?>


        <?php echo e($message); ?>

    </button>
<?php endif; ?>

<?php /**PATH /var/www/gkgpack.su/public_html/resources/views/components/button.blade.php ENDPATH**/ ?>