<div x-data="{ languageOpen: false }" class="relative">
    <button @click="languageOpen = ! languageOpen" class="relative block mx-4 text-indigo-400 hover:text-indigo-700"><?php echo e(ucfirst(app()->getLocale())); ?></button>

    <div x-cloak x-show="languageOpen" @click="languageOpen = false" class="fixed inset-0 z-10 w-full h-full"></div>

    <div x-cloak x-show="languageOpen" class="absolute right-0 z-10 mt-2 overflow-hidden bg-white rounded-md shadow-xl">
        <?php $__currentLoopData = config('app.available_locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <button type="button" class="block w-full px-4 py-2 text-left text-sm text-gray-700 <?php echo e(app()->getLocale() == $locale ? 'text-white bg-indigo-500' : ''); ?> hover:bg-indigo-600 hover:text-white" wire:click="changeLocale('<?php echo e($locale); ?>')"><?php echo e(ucfirst($locale)); ?></button>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/components/locale.blade.php ENDPATH**/ ?>