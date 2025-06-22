<?php
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

if (!function_exists('optimize_image')) {
    function optimize_image($path, int $width = 1000, int $height = 1000, $compression = 90): void
    {
        $manager = new ImageManager(new Driver());

        $imagew = $manager->read($path);
        $imagew->scaleDown(height: $height, width: $width);
        $imagew->save($path);

        $optimize = OptimizerChainFactory::create();
        $optimize->optimize($path);
    }
}
