<div>
    <?php if(auth()->user()->hasRole(['admin', 'user'])): ?>
         <?php $__env->slot('actions', null, []); ?> 
            <div class="flex">
                <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['message' => ''.e(__('Create order')).'','xOn:click' => 'Livewire.dispatch(\'openModal\', {component: \'order-form\'})']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['message' => ''.e(__('Create order')).'','x-on:click' => 'Livewire.dispatch(\'openModal\', {component: \'order-form\'})']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
            </div>
         <?php $__env->endSlot(); ?>
    <?php endif; ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['tag' => 'th','class' => 'min-w-[160px] w-[160px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'th','class' => 'min-w-[160px] w-[160px]']); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['tag' => 'th']); ?><?php echo e(__('Name')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['tag' => 'th']); ?><?php echo e(__('Barcode')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['tag' => 'th']); ?><?php echo e(__('Note')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['tag' => 'th']); ?>
                <?php if (isset($component)) { $__componentOriginal8c6fd75be2f5a2dc6020af3437ea9a1f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c6fd75be2f5a2dc6020af3437ea9a1f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.select','data' => ['wire:model.change' => 'filter.status','label' => '','classBlock' => 'mb-0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.change' => 'filter.status','label' => '','classBlock' => 'mb-0']); ?>

                    <option value=""><?php echo e(__('Status')); ?></option>

                    <?php $__currentLoopData = \App\Enums\OrderStatuses::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($enum->value); ?>"><?php echo e(__(ucfirst($enum->value))); ?></option>
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
<?php $component->withAttributes(['tag' => 'th']); ?><?php echo e(__('Created at')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['tag' => 'th']); ?><?php echo e(__('Updated at')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['tag' => 'th','class' => 'text-right']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'th','class' => 'text-right']); ?><?php echo e(__('Actions')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['tag' => 'th','class' => 'w-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'th','class' => 'w-1']); ?>
                <?php if(auth()->user()->hasRole(['admin', 'user'])): ?>
                    <div x-data="{ actionOpen: false }" class="relative">
                        <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['@click' => 'actionOpen = ! actionOpen','color' => 'a']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => 'actionOpen = ! actionOpen','color' => 'a']); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5">
                                <path d="M10 3a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM10 8.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM11.5 15.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"></path>
                            </svg>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>

                        <div x-cloak x-show="actionOpen" @click="actionOpen = false" class="fixed inset-0 z-10 w-full h-full"></div>

                        <div x-cloak x-show="actionOpen" class="absolute right-0 z-10 mt-2 overflow-hidden bg-white rounded-lg shadow-xl w-40">
                            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'flex items-center px-3 py-2 text-gray-600 hover:text-white hover:bg-indigo-600 w-full','message' => ''.e(__('Export to excel')).'','wire:click' => 'export']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex items-center px-3 py-2 text-gray-600 hover:text-white hover:bg-indigo-600 w-full','message' => ''.e(__('Export to excel')).'','wire:click' => 'export']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'flex items-center px-3 py-2 text-gray-600 hover:text-white hover:bg-indigo-600 w-full','message' => ''.e(__('Import to excel')).'','xOn:click' => 'Livewire.dispatch(\'openModal\', {component: \'import\', arguments: { key: \'order\' }})']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex items-center px-3 py-2 text-gray-600 hover:text-white hover:bg-indigo-600 w-full','message' => ''.e(__('Import to excel')).'','x-on:click' => 'Livewire.dispatch(\'openModal\', {component: \'import\', arguments: { key: \'order\' }})']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
                        </div>
                    </div>
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
         <?php $__env->endSlot(); ?>

        <?php if($orders->count()): ?>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('order-item', ['order' => $order]);

$__html = app('livewire')->mount($__name, $__params, 'orders.'.$order->id, $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['colspan' => '5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colspan' => '5']); ?>
                    <p class="font-medium"><?php echo e(__('No data available')); ?></p>
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
            </tr>
        <?php endif; ?>
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

    <?php echo e($orders->links()); ?>


</div>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/orders/index.blade.php ENDPATH**/ ?>