<div>
    <div class="bg-white border-b-2 border-indigo-500 px-7 py-4">
        <h3 class="font-medium text-black">
            <?php echo e(__('Import :name', ['name' => ucfirst($key)])); ?>

        </h3>
    </div>

    <div class="px-4 py-5 bg-white dark:bg-gray-800 sm:p-6 shadow">

        <div
            x-data="{ uploading: false, progress: 0 }"
            x-on:livewire-upload-start="uploading = true"
            x-on:livewire-upload-finish="uploading = false"
            x-on:livewire-upload-cancel="uploading = false"
            x-on:livewire-upload-error="uploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress"
        >
            <?php if (isset($component)) { $__componentOriginal7c77957f192c8a2b4a70a19cf12e7282 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c77957f192c8a2b4a70a19cf12e7282 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.fields.text','data' => ['type' => 'file','name' => 'files','wire:model.live' => 'files','accept' => ''.e($accept).'','multiple' => true,'required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('fields.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'file','name' => 'files','wire:model.live' => 'files','accept' => ''.e($accept).'','multiple' => true,'required' => true]); ?>
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

            <?php $__errorArgs = ['files.*'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <!-- Progress Bar -->
            <div x-show="uploading">
                <progress max="100" x-bind:value="progress"></progress>
            </div>
        </div>

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
<?php $component->withAttributes(['tag' => 'th']); ?><?php echo e(__('Name File')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['tag' => 'th']); ?><?php echo e(__('Upload date')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['tag' => 'th','class' => 'w-[180px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'th','class' => 'w-[180px]']); ?><?php echo e(__('Done')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['tag' => 'th','class' => 'w-1']); ?><?php echo e(__('Logs')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['tag' => 'th','class' => 'w-1']); ?> <?php echo $__env->renderComponent(); ?>
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

            <?php $__currentLoopData = $imports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $import): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<?php $component->withAttributes([]); ?><?php echo e($import->name); ?>

                        <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300">
                            <?php echo e(convert_bytes($import->size)); ?>

                        </span>
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
<?php $component->withAttributes([]); ?><?php echo e($import->created_at->diffForHumans()); ?> <?php echo $__env->renderComponent(); ?>
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
                        <?php if($import->done): ?>
                            <?php echo e($import->updated_at->diffForHumans()); ?>

                        <?php else: ?>
                            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['type' => 'button','size' => 'sm','message' => ''.e(__('Processing')).'','wire:click' => 'import('.e($import).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','size' => 'sm','message' => ''.e(__('Processing')).'','wire:click' => 'import('.e($import).')']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['class' => 'text-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-center']); ?>
                        <?php if($import->decision): ?>
                            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['type' => 'button','color' => 'a','wire:click' => 'log('.e($import).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','color' => 'a','wire:click' => 'log('.e($import).')']); ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="fill-current" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M14 4.5V11h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM4.151 15.29a1.2 1.2 0 0 1-.111-.449h.764a.58.58 0 0 0 .255.384q.105.073.25.114.142.041.319.041.245 0 .413-.07a.56.56 0 0 0 .255-.193.5.5 0 0 0 .084-.29.39.39 0 0 0-.152-.326q-.152-.12-.463-.193l-.618-.143a1.7 1.7 0 0 1-.539-.214 1 1 0 0 1-.352-.367 1.1 1.1 0 0 1-.123-.524q0-.366.19-.639.192-.272.528-.422.337-.15.777-.149.456 0 .779.152.326.153.5.41.18.255.2.566h-.75a.56.56 0 0 0-.12-.258.6.6 0 0 0-.246-.181.9.9 0 0 0-.37-.068q-.324 0-.512.152a.47.47 0 0 0-.185.384q0 .18.144.3a1 1 0 0 0 .404.175l.621.143q.326.075.566.211a1 1 0 0 1 .375.358q.135.222.135.56 0 .37-.188.656a1.2 1.2 0 0 1-.539.439q-.351.158-.858.158-.381 0-.665-.09a1.4 1.4 0 0 1-.478-.252 1.1 1.1 0 0 1-.29-.375m-3.104-.033a1.3 1.3 0 0 1-.082-.466h.764a.6.6 0 0 0 .074.27.5.5 0 0 0 .454.246q.285 0 .422-.164.137-.165.137-.466v-2.745h.791v2.725q0 .66-.357 1.005-.355.345-.985.345a1.6 1.6 0 0 1-.568-.094 1.15 1.15 0 0 1-.407-.266 1.1 1.1 0 0 1-.243-.39m9.091-1.585v.522q0 .384-.117.641a.86.86 0 0 1-.322.387.9.9 0 0 1-.47.126.9.9 0 0 1-.47-.126.87.87 0 0 1-.32-.387 1.55 1.55 0 0 1-.117-.641v-.522q0-.386.117-.641a.87.87 0 0 1 .32-.387.87.87 0 0 1 .47-.129q.265 0 .47.129a.86.86 0 0 1 .322.387q.117.255.117.641m.803.519v-.513q0-.565-.205-.973a1.46 1.46 0 0 0-.59-.63q-.38-.22-.916-.22-.534 0-.92.22a1.44 1.44 0 0 0-.589.628q-.205.407-.205.975v.513q0 .562.205.973.205.407.589.626.386.217.92.217.536 0 .917-.217.384-.22.589-.626.204-.41.205-.973m1.29-.935v2.675h-.746v-3.999h.662l1.752 2.66h.032v-2.66h.75v4h-.656l-1.761-2.676z"/>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-default-column','data' => ['class' => 'text-right']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-default-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-right']); ?>
                        <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['type' => 'button','color' => 'a','wire:click' => 'download']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','color' => 'a','wire:click' => 'download']); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="fill-current" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
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

        <?php echo e($imports->links()); ?>


    </div>


</div>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/import.blade.php ENDPATH**/ ?>