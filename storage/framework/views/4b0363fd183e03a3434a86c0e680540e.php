<?php if($table['actions']->isNotEmpty()): ?>
    <?php if (isset($component)) { $__componentOriginal37748d67462940dfd38cd0cb6538c8fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal37748d67462940dfd38cd0cb6538c8fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-table::components.dropdown','data' => ['label' => ''.e(__('Actions')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('livewire-table::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(__('Actions')).'']); ?>
         <?php $__env->slot('icon', null, []); ?> 
            <!-- Icon "play" (outline) from https://heroicons.com -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
            </svg>
         <?php $__env->endSlot(); ?>
        <div class="flex flex-col" x-data="{ selected: <?php if ((object) ('selected') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('selected'->value()); ?>')<?php echo e('selected'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('selected'); ?>')<?php endif; ?> }">
            <?php ($standaloneActions = $table['actions']->filter(fn($action): bool => $action->isStandalone())); ?>
            <?php if($standaloneActions->isNotEmpty()): ?>
                <div class="flex flex-col border-b border-neutral-200 dark:border-neutral-700 last:border-b-0">
                    <span
                        class="px-3 py-2 font-bold text-xs uppercase border-b border-neutral-200 bg-neutral-50 text-neutral-500 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                        <?php echo app('translator')->get('Standalone Actions'); ?>
                    </span>
                    <?php $__currentLoopData = $standaloneActions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $standaloneAction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($standaloneAction->callback() === null): ?>
                            <button class="px-3 py-1 text-left truncate hover:bg-neutral-100 dark:hover:bg-neutral-700"
                                    x-on:click="
                                        <?php echo e($standaloneAction->code()); ?>

                                        show = false
                                    "
                                    type="button">
                                <?php echo e($standaloneAction->label()); ?>

                            </button>
                        <?php else: ?>
                            <button class="px-3 py-1 text-left truncate hover:bg-neutral-100 dark:hover:bg-neutral-700"
                                    wire:click="executeAction('<?php echo e($standaloneAction->code()); ?>')"
                                    x-on:click="show = false"
                                    type="button">
                                <?php echo e($standaloneAction->label()); ?>

                            </button>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

            <?php ($actions = $table['actions']->filter(fn($action): bool => ! $action->isStandalone())); ?>
            <?php if($actions->isNotEmpty()): ?>
                <div class="flex flex-col border-b border-neutral-200 dark:border-neutral-700 last:border-b-0">
                    <span
                        class="px-3 py-2 font-bold text-xs uppercase border-b border-neutral-200 bg-neutral-50 text-neutral-500 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                        <?php echo app('translator')->get('Actions'); ?>
                    </span>
                    <?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($action->callback() === null): ?>
                            <button
                                class="px-3 py-1 text-left truncate hover:bg-neutral-100 disabled:hover:bg-white disabled:text-neutral-500 dark:hover:bg-neutral-700 dark:disabled:hover:bg-neutral-800"
                                x-bind:disabled="selected.length === 0"
                                x-on:click="
                                    <?php echo e($action->code()); ?>

                                    show = false
                                "
                                type="button">
                                <?php echo e($action->label()); ?>

                            </button>
                        <?php else: ?>
                            <button
                                class="px-3 py-1 text-left truncate hover:bg-neutral-100 disabled:hover:bg-white disabled:text-neutral-500 dark:hover:bg-neutral-700 dark:disabled:hover:bg-neutral-800"
                                x-bind:disabled="selected.length === 0"
                                wire:click="executeAction('<?php echo e($action->code()); ?>')"
                                x-on:click="show = false"
                                type="button">
                                <?php echo e($action->label()); ?>

                            </button>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
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
<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/vendor/livewire-table/bar/dropdowns/actions.blade.php ENDPATH**/ ?>