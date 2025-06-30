<div>
     <?php $__env->slot('actions', null, []); ?> 

        <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['message' => ''.e(__('Create product')).'','xOn:click' => 'Livewire.dispatch(\'openModal\', {component: \'product-form\'})']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['message' => ''.e(__('Create product')).'','x-on:click' => 'Livewire.dispatch(\'openModal\', {component: \'product-form\'})']); ?>
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

     <?php $__env->endSlot(); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['tag' => 'th']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'th']); ?><?php echo e(__('Image')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['tag' => 'th']); ?><?php echo e(__('Serction')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['tag' => 'th']); ?><?php echo e(__('Stock')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['tag' => 'th']); ?><?php echo e(__('Currect stock')); ?> <?php echo $__env->renderComponent(); ?>
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
                        <div class="z-10 bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600 block">
                            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'flex items-center px-3 py-2 text-gray-600 hover:text-white hover:bg-indigo-600 w-full','message' => ''.e(__('Import to excel')).'','xOn:click' => 'Livewire.dispatch(\'openModal\', {component: \'import\', arguments: { key: \'product\' }})']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex items-center px-3 py-2 text-gray-600 hover:text-white hover:bg-indigo-600 w-full','message' => ''.e(__('Import to excel')).'','x-on:click' => 'Livewire.dispatch(\'openModal\', {component: \'import\', arguments: { key: \'product\' }})']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'flex items-center px-3 py-2 text-gray-600 hover:text-white hover:bg-indigo-600 w-full','message' => ''.e(__('Upload Images')).'','xOn:click' => 'Livewire.dispatch(\'openModal\', {component: \'import\', arguments: { key: \'product-image\' }})']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex items-center px-3 py-2 text-gray-600 hover:text-white hover:bg-indigo-600 w-full','message' => ''.e(__('Upload Images')).'','x-on:click' => 'Livewire.dispatch(\'openModal\', {component: \'import\', arguments: { key: \'product-image\' }})']); ?>
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
         <?php $__env->endSlot(); ?>

        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <?php if (isset($component)) { $__componentOriginald58f98f716253ea4bac9f7de75949421 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald58f98f716253ea4bac9f7de75949421 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['class' => 'w-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-1']); ?>
                    <?php if($product->images()->first()): ?>
                        <?php if (isset($component)) { $__componentOriginal22d447e3f5aafc93b8447b54b36ee789 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal22d447e3f5aafc93b8447b54b36ee789 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image','data' => ['src' => ''.e(asset('storage/' . $product->images()->first()->path)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e(asset('storage/' . $product->images()->first()->path)).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal22d447e3f5aafc93b8447b54b36ee789)): ?>
<?php $attributes = $__attributesOriginal22d447e3f5aafc93b8447b54b36ee789; ?>
<?php unset($__attributesOriginal22d447e3f5aafc93b8447b54b36ee789); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal22d447e3f5aafc93b8447b54b36ee789)): ?>
<?php $component = $__componentOriginal22d447e3f5aafc93b8447b54b36ee789; ?>
<?php unset($__componentOriginal22d447e3f5aafc93b8447b54b36ee789); ?>
<?php endif; ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e($product->name); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e($product->barcode); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e($product->section); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e($product->stocks()->where('reserve', false)->sum('qty')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e($product->stocks()->sum('qty')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e(\Carbon\Carbon::parse( $product->updated_at )->setTimezone( get_user_timezone())->diffForHumans()); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['class' => 'text-right','colspan' => '2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-right','colspan' => '2']); ?>
                 
                    <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['color' => 'a','title' => ''.e(__('Edit')).'','wire:click' => '$dispatch(\'openModal\', { component: \'product-form\', arguments: { product: '.e($product).' }})']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'a','title' => ''.e(__('Edit')).'','wire:click' => '$dispatch(\'openModal\', { component: \'product-form\', arguments: { product: '.e($product).' }})']); ?>
                        <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56524 3.23223C2.03408 2.76339 2.66997 2.5 3.33301 2.5H9.16634C9.62658 2.5 9.99967 2.8731 9.99967 3.33333C9.99967 3.79357 9.62658 4.16667 9.16634 4.16667H3.33301C3.11199 4.16667 2.90003 4.25446 2.74375 4.41074C2.58747 4.56702 2.49967 4.77899 2.49967 5V16.6667C2.49967 16.8877 2.58747 17.0996 2.74375 17.2559C2.90003 17.4122 3.11199 17.5 3.33301 17.5H14.9997C15.2207 17.5 15.4326 17.4122 15.5889 17.2559C15.7452 17.0996 15.833 16.8877 15.833 16.6667V10.8333C15.833 10.3731 16.2061 10 16.6663 10C17.1266 10 17.4997 10.3731 17.4997 10.8333V16.6667C17.4997 17.3297 17.2363 17.9656 16.7674 18.4344C16.2986 18.9033 15.6627 19.1667 14.9997 19.1667H3.33301C2.66997 19.1667 2.03408 18.9033 1.56524 18.4344C1.0964 17.9656 0.833008 17.3297 0.833008 16.6667V5C0.833008 4.33696 1.0964 3.70107 1.56524 3.23223Z" fill=""></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6664 2.39884C16.4185 2.39884 16.1809 2.49729 16.0056 2.67253L8.25216 10.426L7.81167 12.188L9.57365 11.7475L17.3271 3.99402C17.5023 3.81878 17.6008 3.5811 17.6008 3.33328C17.6008 3.08545 17.5023 2.84777 17.3271 2.67253C17.1519 2.49729 16.9142 2.39884 16.6664 2.39884ZM14.8271 1.49402C15.3149 1.00622 15.9765 0.732178 16.6664 0.732178C17.3562 0.732178 18.0178 1.00622 18.5056 1.49402C18.9934 1.98182 19.2675 2.64342 19.2675 3.33328C19.2675 4.02313 18.9934 4.68473 18.5056 5.17253L10.5889 13.0892C10.4821 13.196 10.3483 13.2718 10.2018 13.3084L6.86847 14.1417C6.58449 14.2127 6.28409 14.1295 6.0771 13.9225C5.87012 13.7156 5.78691 13.4151 5.85791 13.1312L6.69124 9.79783C6.72787 9.65131 6.80364 9.51749 6.91044 9.41069L14.8271 1.49402Z" fill=""></path>
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

                    <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['color' => 'a','title' => ''.e(__('Delete')).'','wire:click' => 'delete('.e($product).')','wire:confirm.prompt' => ''.e(__('Are you sure?\n\nType DELETE to confirm|DELETE')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'a','title' => ''.e(__('Delete')).'','wire:click' => 'delete('.e($product).')','wire:confirm.prompt' => ''.e(__('Are you sure?\n\nType DELETE to confirm|DELETE')).'']); ?>
                        <svg class="fill-current" width="20" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.7535 2.47502H11.5879V1.9969C11.5879 1.15315 10.9129 0.478149 10.0691 0.478149H7.90352C7.05977 0.478149 6.38477 1.15315 6.38477 1.9969V2.47502H4.21914C3.40352 2.47502 2.72852 3.15002 2.72852 3.96565V4.8094C2.72852 5.42815 3.09414 5.9344 3.62852 6.1594L4.07852 15.4688C4.13477 16.6219 5.09102 17.5219 6.24414 17.5219H11.7004C12.8535 17.5219 13.8098 16.6219 13.866 15.4688L14.3441 6.13127C14.8785 5.90627 15.2441 5.3719 15.2441 4.78127V3.93752C15.2441 3.15002 14.5691 2.47502 13.7535 2.47502ZM7.67852 1.9969C7.67852 1.85627 7.79102 1.74377 7.93164 1.74377H10.0973C10.2379 1.74377 10.3504 1.85627 10.3504 1.9969V2.47502H7.70664V1.9969H7.67852ZM4.02227 3.96565C4.02227 3.85315 4.10664 3.74065 4.24727 3.74065H13.7535C13.866 3.74065 13.9785 3.82502 13.9785 3.96565V4.8094C13.9785 4.9219 13.8941 5.0344 13.7535 5.0344H4.24727C4.13477 5.0344 4.02227 4.95002 4.02227 4.8094V3.96565ZM11.7285 16.2563H6.27227C5.79414 16.2563 5.40039 15.8906 5.37227 15.3844L4.95039 6.2719H13.0785L12.6566 15.3844C12.6004 15.8625 12.2066 16.2563 11.7285 16.2563Z" fill=""></path>
                            <path d="M9.00039 9.11255C8.66289 9.11255 8.35352 9.3938 8.35352 9.75942V13.3313C8.35352 13.6688 8.63477 13.9782 9.00039 13.9782C9.33789 13.9782 9.64727 13.6969 9.64727 13.3313V9.75942C9.64727 9.3938 9.33789 9.11255 9.00039 9.11255Z" fill=""></path>
                            <path d="M11.2502 9.67504C10.8846 9.64692 10.6033 9.90004 10.5752 10.2657L10.4064 12.7407C10.3783 13.0782 10.6314 13.3875 10.9971 13.4157C11.0252 13.4157 11.0252 13.4157 11.0533 13.4157C11.3908 13.4157 11.6721 13.1625 11.6721 12.825L11.8408 10.35C11.8408 9.98442 11.5877 9.70317 11.2502 9.67504Z" fill=""></path><path d="M6.72245 9.67504C6.38495 9.70317 6.1037 10.0125 6.13182 10.35L6.3287 12.825C6.35683 13.1625 6.63808 13.4157 6.94745 13.4157C6.97558 13.4157 6.97558 13.4157 7.0037 13.4157C7.3412 13.3875 7.62245 13.0782 7.59433 12.7407L7.39745 10.2657C7.39745 9.90004 7.08808 9.64692 6.72245 9.67504Z" fill=""></path>
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

    <?php echo e($products->links()); ?>


</div>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/products/index.blade.php ENDPATH**/ ?>