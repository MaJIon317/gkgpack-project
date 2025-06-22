<?php if (isset($component)) { $__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form','data' => ['submit' => 'update','class' => 'col-span-5 xl:col-span-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['submit' => 'update','class' => 'col-span-5 xl:col-span-2']); ?>
     <?php $__env->slot('title', null, []); ?> 
        <?php echo e(__('Update Password')); ?>

     <?php $__env->endSlot(); ?>

     <?php $__env->slot('description', null, []); ?> 
        <?php echo e(__('Ensure your account is using a long, random password to stay secure.')); ?>

     <?php $__env->endSlot(); ?>
    
     <?php $__env->slot('form', null, []); ?> 

        <?php if (isset($component)) { $__componentOriginal7c77957f192c8a2b4a70a19cf12e7282 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.text','data' => ['type' => 'password','name' => 'current_password','wire:model' => 'current_password','label' => ''.e(__('Current Password')).'','placeholder' => ''.e(__('Enter your current password')).'','autocomplete' => 'current-password','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'password','name' => 'current_password','wire:model' => 'current_password','label' => ''.e(__('Current Password')).'','placeholder' => ''.e(__('Enter your current password')).'','autocomplete' => 'current-password','required' => true]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.text','data' => ['type' => 'password','name' => 'password','wire:model' => 'password','label' => ''.e(__('New Password')).'','placeholder' => ''.e(__('Enter your new password')).'','autocomplete' => 'new-password','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'password','name' => 'password','wire:model' => 'password','label' => ''.e(__('New Password')).'','placeholder' => ''.e(__('Enter your new password')).'','autocomplete' => 'new-password','required' => true]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.text','data' => ['type' => 'password','name' => 'password_confirmation','wire:model' => 'password_confirmation','label' => ''.e(__('Confirm Password')).'','placeholder' => ''.e(__('Repeat your new password')).'','autocomplete' => 'new-password','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'password','name' => 'password_confirmation','wire:model' => 'password_confirmation','label' => ''.e(__('Confirm Password')).'','placeholder' => ''.e(__('Repeat your new password')).'','autocomplete' => 'new-password','required' => true]); ?>
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
 
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('actions', null, []); ?> 
        <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['type' => 'submit','message' => ''.e(__('Save Settings')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','message' => ''.e(__('Save Settings')).'']); ?>
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
<?php endif; ?><?php /**PATH /var/www/gkgpack.su/public_html/resources/views/settings/password.blade.php ENDPATH**/ ?>