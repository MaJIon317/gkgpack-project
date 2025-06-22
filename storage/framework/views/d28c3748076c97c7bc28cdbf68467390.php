<div x-data="{ imageOpen: false }" class="min-w-max">
    <img
        src="<?php echo e($src ?? ''); ?>"
        alt="<?php echo e($src ?? 'img'); ?>"
        loading="lazy"
        @click="imageOpen = true"
        <?php echo e($attributes->merge(['class' => 'inline-block w-10 h-10 bproduct rounded-full object-cover cursor-pointer'])); ?>

    >

    <template x-teleport="<?php echo e('body'); ?>">
        <div x-cloak x-show="imageOpen" class="fixed left-0 top-0 right-0 bottom-0 z-10" @click="imageOpen = false">
            <div class="fixed inset-0 w-full h-full h-screen w-screen place-items-center bg-black bg-opacity-60 backdrop-blur-sm transition-opacity duration-300"></div>

            <img
                src="<?php echo e($src ?? ''); ?>"
                alt="<?php echo e($src ?? 'img'); ?>"
                loading="lazy"
                class="absolute left-0 top-0 right-0 bottom-0 flex flex-col bg-white max-w-[80%] max-h-[80%] m-auto rounded-lg"
            >
        </div>
    </template>
</div>

<?php /**PATH /var/www/gkgpack.su/public_html/resources/views/components/image.blade.php ENDPATH**/ ?>