<?php if($table['filters']->isNotEmpty()): ?>
    <?php if (isset($component)) { $__componentOriginal37748d67462940dfd38cd0cb6538c8fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal37748d67462940dfd38cd0cb6538c8fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-table::components.dropdown','data' => ['label' => ''.e(__('Filters')).'','active' => count($this->filters) > 0]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('livewire-table::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(__('Filters')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(count($this->filters) > 0)]); ?>
         <?php $__env->slot('icon', null, []); ?> 
            <!-- Icon "adjustments-horizontal" (outline) from https://heroicons.com -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
            </svg>
         <?php $__env->endSlot(); ?>
        <span
            class="flex gap-2 px-3 py-2 font-bold text-xs uppercase border-b border-neutral-200 bg-neutral-50 text-neutral-500 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
            <span class="mr-auto"><?php echo app('translator')->get('Filters'); ?></span>
            <?php if($this->canClearFilters()): ?>
                <a href="#" class="text-red-500" x-on:click="show = false" wire:click.prevent="clearFilters">
                    <?php echo app('translator')->get('Clear'); ?>
                </a>
            <?php endif; ?>
        </span>
        <div class="flex flex-col">
            <?php $__currentLoopData = $table['filters']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="border-b border-neutral-200 last:border-b-0 dark:border-neutral-700">
                    <?php echo e($filter->render()); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal37748d67462940dfd38cd0cb6538c8fb)): ?>
<?php $attributes = $__attributesOriginal37748d67462940dfd38cd0cb6538c8fb; ?>
<?php unset($__attributesOriginal37748d67462940dfd38cd0cb6538c8fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal37748d67462940dfd38cd0cb6538c8fb)): ?>
<?php $component = $__componentOriginal37748d67462940dfd38cd0cb6538c8fb; ?>
<?php unset($__componentOriginal37748d67462940dfd38cd0cb6538c8fb); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/gkgpack.su/public_html/resources/views/vendor/livewire-table/bar/dropdowns/filters.blade.php ENDPATH**/ ?>