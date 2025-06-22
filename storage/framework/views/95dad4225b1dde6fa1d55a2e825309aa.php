<div>

    <header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-indigo-600">
        <div class="flex items-center gap-3">
            <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>

            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.HeaderSeachProduct');

$__html = app('livewire')->mount($__name, $__params, 1, $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

        </div>

        <div class="flex items-center">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('locale');

$__html = app('livewire')->mount($__name, $__params, 'lw-3212301828-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

            

            <div x-data="{ languageOpen: false }"  class="relative">
                <button @click="languageOpen = ! languageOpen" class="relative block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none">
                    <img class="object-cover w-full h-full" src="data:image/svg+xml;base64,PCEtLSBpY29uNjY2LmNvbSAtIE1JTExJT05TIE9GIEZSRUUgVkVDVE9SIElDT05TIC0tPjxzdmcgdmlld0JveD0iMCAwIDUxMiA1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgaWQ9InJpZ2h0LWFycm93Ij48Y2lyY2xlIGlkPSJDaXJjbGUiIGN4PSIyNTYiIGN5PSIyNTYiIGZpbGw9IiMyZTMxOTIiIHI9IjI1NiI+PC9jaXJjbGU+PGcgZmlsbD0iI2ZmZiI+PHBhdGggZD0ibTI0NS42MyAyNTAuNjVoMjAuNzNhMTQzIDE0MyAwIDAgMSAxNDMgMTQzdjUuMjRhMTIgMTIgMCAwIDEgLTEyIDEyaC0yODIuNzFhMTIgMTIgMCAwIDEgLTEyLTEydi01LjI0YTE0MyAxNDMgMCAwIDEgMTQyLjk4LTE0M3oiPjwvcGF0aD48ZWxsaXBzZSBjeD0iMjU2IiBjeT0iMTYwLjQ5IiByeD0iNTkuNzYiIHJ5PSI3MC45NiI+PC9lbGxpcHNlPjwvZz48L2c+PC9zdmc+" alt="Your avatar">
                </button>

                <div x-cloak x-show="languageOpen" @click="languageOpen = false" class="fixed inset-0 z-10 w-full h-full"></div>

                <div x-cloak x-show="languageOpen" class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl">
                    <a href="<?php echo e(route('user.activity')); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white" wire:navigate><?php echo e(__('Activity')); ?></a>

                    <a href="<?php echo e(route('setting')); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white" wire:navigate><?php echo e(__('Setting')); ?></a>

                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('logout');

$__html = app('livewire')->mount($__name, $__params, 'lw-3212301828-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                </div>
            </div>
        </div>
    </header>

    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal5194778a3a7b899dcee5619d0610f5cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['color' => 'error','message' => 'ERROR','description' => ''.e($error).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'error','message' => 'ERROR','description' => ''.e($error).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $attributes = $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $component = $__componentOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

</div>
<?php /**PATH /var/www/gkgpack.su/public_html/resources/views/components/header.blade.php ENDPATH**/ ?>