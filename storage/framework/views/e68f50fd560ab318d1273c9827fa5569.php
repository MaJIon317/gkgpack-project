<div>
    <?php if (isset($component)) { $__componentOriginale65028f122855c5652ad9216311040cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale65028f122855c5652ad9216311040cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('thead', null, []); ?> 
            <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['tag' => 'th','class' => 'm-0 p-0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'th','class' => 'm-0 p-0']); ?>
                <?php if (isset($component)) { $__componentOriginal8c6fd75be2f5a2dc6020af3437ea9a1f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c6fd75be2f5a2dc6020af3437ea9a1f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.select','data' => ['classBlock' => '','wire:model.change' => 'subject_type']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['classBlock' => '','wire:model.change' => 'subject_type']); ?>

                    <option value=""><?php echo e(__('Model')); ?></option>
                    <?php $__currentLoopData = $this->subjectTypes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($value->subject_type); ?>"><?php echo e(__(Str::headline(str_replace('App\Models\\', '', $value->subject_type)))); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8c6fd75be2f5a2dc6020af3437ea9a1f)): ?>
<?php $attributes = $__attributesOriginal8c6fd75be2f5a2dc6020af3437ea9a1f; ?>
<?php unset($__attributesOriginal8c6fd75be2f5a2dc6020af3437ea9a1f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c6fd75be2f5a2dc6020af3437ea9a1f)): ?>
<?php $component = $__componentOriginal8c6fd75be2f5a2dc6020af3437ea9a1f; ?>
<?php unset($__componentOriginal8c6fd75be2f5a2dc6020af3437ea9a1f); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $attributes = $__attributesOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__attributesOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $component = $__componentOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__componentOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['tag' => 'th','class' => 'm-0 p-0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'th','class' => 'm-0 p-0']); ?>
                <?php if (isset($component)) { $__componentOriginal8c6fd75be2f5a2dc6020af3437ea9a1f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c6fd75be2f5a2dc6020af3437ea9a1f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.select','data' => ['classBlock' => '','wire:model.change' => 'subject_event']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['classBlock' => '','wire:model.change' => 'subject_event']); ?>

                    <option value=""><?php echo e(__('Event')); ?></option>
                    <?php $__currentLoopData = $this->subjectEvents(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($value->subject_event); ?>"><?php echo e($value->subject_event); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8c6fd75be2f5a2dc6020af3437ea9a1f)): ?>
<?php $attributes = $__attributesOriginal8c6fd75be2f5a2dc6020af3437ea9a1f; ?>
<?php unset($__attributesOriginal8c6fd75be2f5a2dc6020af3437ea9a1f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c6fd75be2f5a2dc6020af3437ea9a1f)): ?>
<?php $component = $__componentOriginal8c6fd75be2f5a2dc6020af3437ea9a1f; ?>
<?php unset($__componentOriginal8c6fd75be2f5a2dc6020af3437ea9a1f); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $attributes = $__attributesOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__attributesOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $component = $__componentOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__componentOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['tag' => 'th']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'th']); ?><?php echo e(__('Object')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $attributes = $__attributesOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__attributesOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $component = $__componentOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__componentOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['tag' => 'th','class' => 'm-0 p-0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'th','class' => 'm-0 p-0']); ?>
                <?php if (isset($component)) { $__componentOriginal8c6fd75be2f5a2dc6020af3437ea9a1f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c6fd75be2f5a2dc6020af3437ea9a1f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.select','data' => ['classBlock' => '','wire:model.change' => 'user_id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['classBlock' => '','wire:model.change' => 'user_id']); ?>

                    <option value=""><?php echo e(__('User')); ?></option>
                    <?php if($users): ?>
                        <?php $__currentLoopData = $this->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userId => $userName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($userId); ?>"><?php echo e($userName); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8c6fd75be2f5a2dc6020af3437ea9a1f)): ?>
<?php $attributes = $__attributesOriginal8c6fd75be2f5a2dc6020af3437ea9a1f; ?>
<?php unset($__attributesOriginal8c6fd75be2f5a2dc6020af3437ea9a1f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c6fd75be2f5a2dc6020af3437ea9a1f)): ?>
<?php $component = $__componentOriginal8c6fd75be2f5a2dc6020af3437ea9a1f; ?>
<?php unset($__componentOriginal8c6fd75be2f5a2dc6020af3437ea9a1f); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $attributes = $__attributesOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__attributesOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $component = $__componentOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__componentOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['tag' => 'th','class' => 'text-right min-w-[180px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'th','class' => 'text-right min-w-[180px]']); ?><?php echo e(__('Created at')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $attributes = $__attributesOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__attributesOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $component = $__componentOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__componentOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
         <?php $__env->endSlot(); ?>

        <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e(__(Str::headline(str_replace('App\Models\\', '', $activity->subject_type)))); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $attributes = $__attributesOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__attributesOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $component = $__componentOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__componentOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e(__($activity->subject_event)); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $attributes = $__attributesOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__attributesOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $component = $__componentOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__componentOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <div class="flex flex-wrap gap-1">
                        <?php $__currentLoopData = $activity->properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-sm dark:bg-gray-700 dark:text-gray-300">
                                <string><?php echo e($key); ?>:</string>
                                <span><?php echo e($property); ?></span>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $attributes = $__attributesOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__attributesOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $component = $__componentOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__componentOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e($activity->user->name); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $attributes = $__attributesOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__attributesOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $component = $__componentOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__componentOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['class' => 'text-right']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-right']); ?><?php echo e($activity->created_at->diffForHumans()); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $attributes = $__attributesOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__attributesOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald58f98f716253ea4bac9f7de75949421)): ?>
<?php $component = $__componentOriginald58f98f716253ea4bac9f7de75949421; ?>
<?php unset($__componentOriginald58f98f716253ea4bac9f7de75949421); ?>
<?php endif; ?>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale65028f122855c5652ad9216311040cc)): ?>
<?php $attributes = $__attributesOriginale65028f122855c5652ad9216311040cc; ?>
<?php unset($__attributesOriginale65028f122855c5652ad9216311040cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale65028f122855c5652ad9216311040cc)): ?>
<?php $component = $__componentOriginale65028f122855c5652ad9216311040cc; ?>
<?php unset($__componentOriginale65028f122855c5652ad9216311040cc); ?>
<?php endif; ?>

    <?php echo e($activities->links()); ?>

</div>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/user-activity.blade.php ENDPATH**/ ?>