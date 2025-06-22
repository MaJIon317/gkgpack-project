<?php if (isset($component)) { $__componentOriginalaf63cfdd1d339939f888d6396e060ee9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaf63cfdd1d339939f888d6396e060ee9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-table::components.button','data' => ['title' => __('Reordering'),'ariaLabel' => __('Reordering'),'wire:click' => '$toggle(\'reordering\')','active' => $this->reordering]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('livewire-table::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Reordering')),'aria-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Reordering')),'wire:click' => '$toggle(\'reordering\')','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->reordering)]); ?>
    <!-- Icon "queue-list" (outline) from https://heroicons.com -->
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
    </svg>
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
<?php /**PATH /var/www/gkgpack.su/public_html/resources/views/vendor/livewire-table/bar/buttons/reordering.blade.php ENDPATH**/ ?>