<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <link rel="manifest" href="<?php echo e(asset('manifest.webmanifest')); ?>">

        <!-- Обязательные -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta name="apple-mobile-web-app-title" content="<?php echo e(config('app.name')); ?>">

        <link rel="apple-touch-icon" href="<?php echo e(asset('icons/192x192.png')); ?>">


        <base href="<?php echo e(route('home')); ?>">

        <title><?php echo e($title ?? config('app.name', 'Laravel')); ?></title>

        <!-- Scripts -->
        <script src="./webcam-barcode-scanner.umd.js"></script>

        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

        <?php echo app('Illuminate\Foundation\Vite')('resources/js/scanner.js'); ?>

        <script>
            window.Laravel = {
                user: <?php echo json_encode(Auth::user(), 15, 512) ?>
            };
        </script>

        <!-- Styles -->
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    </head>
    <body x-data="{ checkScanner: true, sidebarOpen: false }" class="font-sans antialiased">
        <div class="flex h-screen bg-gray-200 font-roboto">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('sidebar');

$__html = app('livewire')->mount($__name, $__params, 'lw-3298741183-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

            <div class="flex-1 flex flex-col overflow-hidden">
                <?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $attributes = $__attributesOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__attributesOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $component = $__componentOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__componentOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>

                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container mx-auto px-6 py-8">
                        <div class="flex flex-wrap items-center justify-between gap-y-4 gap-x-3 mb-5">
                            <?php if(isset($title)): ?>
                                <h3 class="text-gray-700 text-3xl font-medium mb-0"><?php echo e($title); ?></h3>
                            <?php endif; ?>
                            <?php if(isset($actions)): ?>
                                <?php echo e($actions); ?>

                            <?php endif; ?>
                        </div>

                        <?php echo e($slot); ?>

                    </div>
                </main>
            </div>
        </div>

        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('wire-elements-modal');

$__html = app('livewire')->mount($__name, $__params, 'lw-3298741183-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

    </body>
</html>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/layouts/app.blade.php ENDPATH**/ ?>