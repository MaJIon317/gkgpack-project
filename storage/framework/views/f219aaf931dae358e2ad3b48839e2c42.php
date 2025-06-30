<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title',
    'description',
    'submit',
    'class' => 'md:grid md:grid-cols-3 md:gap-6',
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
    'title',
    'description',
    'submit',
    'class' => 'md:grid md:grid-cols-3 md:gap-6',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="<?php echo e($class); ?>">
    <form wire:submit="<?php echo e($submit); ?>" class="w-full">
        <?php if(isset($title) || isset($description)): ?>
            <div class="bg-white border-b-2 border-indigo-500 px-7 py-4">
                <?php if(isset($title)): ?>
                    <h3 class="font-medium text-black"><?php echo e($title); ?></h3>
                <?php endif; ?>
                <?php if(isset($description)): ?>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        <?php echo e($description); ?>

                    </p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if(isset($form)): ?>
            <div class="px-4 py-5 bg-white dark:bg-gray-800 sm:p-6 shadow">
                <?php echo e($form); ?>

            </div>
        <?php endif; ?>

        <?php if(isset($actions)): ?>
            <div class="flex flex-wrap items-center justify-end px-4 py-3 bg-gray-50 dark:bg-gray-800 text-end sm:px-6 shadow gap-2">
                <?php echo e($actions); ?>

            </div>
        <?php endif; ?>
    </form>
</div>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/components/form.blade.php ENDPATH**/ ?>