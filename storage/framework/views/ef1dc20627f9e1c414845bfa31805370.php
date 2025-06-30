<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['icon', 'label', 'active' => false]));

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

foreach (array_filter((['icon', 'label', 'active' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="md:relative z-10" x-data="{ show: false }">
    <?php if (isset($component)) { $__componentOriginalaf63cfdd1d339939f888d6396e060ee9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaf63cfdd1d339939f888d6396e060ee9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-table::components.button','data' => ['title' => $label,'ariaLabel' => $label,'active' => $active,'xOn:click' => 'show = !show']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('livewire-table::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($label),'aria-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($label),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($active),'x-on:click' => 'show = !show']); ?>
        <?php echo e($icon ?? ''); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaf63cfdd1d339939f888d6396e060ee9)): ?>
<?php $attributes = $__attributesOriginalaf63cfdd1d339939f888d6396e060ee9; ?>
<?php unset($__attributesOriginalaf63cfdd1d339939f888d6396e060ee9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaf63cfdd1d339939f888d6396e060ee9)): ?>
<?php $component = $__componentOriginalaf63cfdd1d339939f888d6396e060ee9; ?>
<?php unset($__componentOriginalaf63cfdd1d339939f888d6396e060ee9); ?>
<?php endif; ?>
    <div
        class="w-full md:w-56 absolute right-0 text-black bg-white mt-2 shadow-xl rounded border border-neutral-200 overflow-y-auto max-h-56 dark:text-white dark:bg-neutral-800 dark:border-neutral-700"
        x-show="show"
        x-on:click.away="show = false"
        style="display: none;">
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/vendor/livewire-table/components/dropdown.blade.php ENDPATH**/ ?>