<?php if (isset($component)) { $__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form','data' => ['submit' => ''.e($user ? 'update' : 'store').'','class' => 'col-span-5 xl:col-span-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['submit' => ''.e($user ? 'update' : 'store').'','class' => 'col-span-5 xl:col-span-3']); ?>

     <?php $__env->slot('title', null, []); ?> 
        <?php echo e($user ? __('Edit User, :name', ['name' => $user->name]) : __('Create User')); ?>

     <?php $__env->endSlot(); ?>

     <?php $__env->slot('form', null, []); ?> 

        <?php if (isset($component)) { $__componentOriginal8c6fd75be2f5a2dc6020af3437ea9a1f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c6fd75be2f5a2dc6020af3437ea9a1f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.select','data' => ['wire:model' => 'role','label' => ''.e(__('Role')).'','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'role','label' => ''.e(__('Role')).'','required' => true]); ?>

            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($value->value); ?>" <?php if($role == $value->value): ?> selected <?php endif; ?>><?php echo e(__(ucfirst($value->value))); ?></option>
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

        <?php if (isset($component)) { $__componentOriginal7c77957f192c8a2b4a70a19cf12e7282 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.text','data' => ['name' => 'name','wire:model' => 'name','label' => ''.e(__('Name')).'','placeholder' => ''.e(__('Enter the name')).'','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'name','wire:model' => 'name','label' => ''.e(__('Name')).'','placeholder' => ''.e(__('Enter the name')).'','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282)): ?>
<?php $attributes = $__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282; ?>
<?php unset($__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c77957f192c8a2b4a70a19cf12e7282)): ?>
<?php $component = $__componentOriginal7c77957f192c8a2b4a70a19cf12e7282; ?>
<?php unset($__componentOriginal7c77957f192c8a2b4a70a19cf12e7282); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal7c77957f192c8a2b4a70a19cf12e7282 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.text','data' => ['type' => 'email','name' => 'email','wire:model' => 'email','label' => ''.e(__('Email')).'','placeholder' => ''.e(__('Enter the email')).'','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'email','name' => 'email','wire:model' => 'email','label' => ''.e(__('Email')).'','placeholder' => ''.e(__('Enter the email')).'','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282)): ?>
<?php $attributes = $__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282; ?>
<?php unset($__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c77957f192c8a2b4a70a19cf12e7282)): ?>
<?php $component = $__componentOriginal7c77957f192c8a2b4a70a19cf12e7282; ?>
<?php unset($__componentOriginal7c77957f192c8a2b4a70a19cf12e7282); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal7c77957f192c8a2b4a70a19cf12e7282 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.text','data' => ['type' => 'password','name' => 'password','wire:model' => 'password','label' => ''.e(__('Password')).'','placeholder' => ''.e(__('Enter the password')).'','required' => !$user]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'password','name' => 'password','wire:model' => 'password','label' => ''.e(__('Password')).'','placeholder' => ''.e(__('Enter the password')).'','required' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!$user)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282)): ?>
<?php $attributes = $__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282; ?>
<?php unset($__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c77957f192c8a2b4a70a19cf12e7282)): ?>
<?php $component = $__componentOriginal7c77957f192c8a2b4a70a19cf12e7282; ?>
<?php unset($__componentOriginal7c77957f192c8a2b4a70a19cf12e7282); ?>
<?php endif; ?>
  
         
        <?php if (isset($component)) { $__componentOriginal8c6fd75be2f5a2dc6020af3437ea9a1f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c6fd75be2f5a2dc6020af3437ea9a1f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.select','data' => ['wire:model' => 'timezone','label' => ''.e(__('Timezone')).'','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'timezone','label' => ''.e(__('Timezone')).'','required' => true]); ?>

            <option value=""></option>
            <?php $__currentLoopData = timezones(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($key); ?>" <?php if($timezone == $key): ?> selected <?php endif; ?>><?php echo e($value); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

             <?php $__env->slot('tooltip', null, []); ?> 
                <?php echo e(__('You can select the time zone in which all data of the Date type will be displayed. Default timezone: :timezone', ['timezone' => (string) now()->tz])); ?>

             <?php $__env->endSlot(); ?>
            
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

     <?php $__env->endSlot(); ?>

     <?php $__env->slot('actions', null, []); ?> 
        <?php if($user): ?>
            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['type' => 'button','color' => 'dark','message' => ''.e(__('DONE')).'','wire:click' => '$dispatch(\'closeModal\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','color' => 'dark','message' => ''.e(__('DONE')).'','wire:click' => '$dispatch(\'closeModal\')']); ?>
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
        <?php endif; ?>
        <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['type' => 'submit','message' => ''.e(__('Commit')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','message' => ''.e(__('Commit')).'']); ?>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab)): ?>
<?php $attributes = $__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab; ?>
<?php unset($__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab)): ?>
<?php $component = $__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab; ?>
<?php unset($__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab); ?>
<?php endif; ?>
<?php /**PATH /var/www/gkgpack.su/public_html/resources/views/users/form.blade.php ENDPATH**/ ?>