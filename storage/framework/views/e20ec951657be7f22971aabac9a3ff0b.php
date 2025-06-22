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

        <title><?php echo e($title ?? config('app.name', 'Laravel')); ?></title>

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

        <!-- Styles -->
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    </head>
    <body>
        <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
            <?php echo e($slot); ?>

        </div>

        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('wire-elements-modal');

$__html = app('livewire')->mount($__name, $__params, 'lw-22841550-0', $__slots ?? [], get_defined_vars());

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
<?php /**PATH /var/www/gkgpack.su/public_html/resources/views/layouts/guest.blade.php ENDPATH**/ ?>