<?php
    $name = $attributes['name'] ?? ($attributes['wire:model'] ?? fake()->uuid());
?>

<div class="<?php echo e($classBlock ?? 'mb-5'); ?>">
    <?php if(isset($label)): ?>
        <label
            for="input-<?php echo e($name); ?>"
            class="<?php echo e(($required ?? false) ? 'after:content-["*"]' : ''); ?> mb-2.5 block font-medium text-black">
            <?php echo e($label); ?>

        </label>
    <?php endif; ?>

    <div class="relative w-full">
        <input
            name="<?php echo e($name); ?>"
            type="<?php echo e($type ?? 'text'); ?>"
            placeholder="<?php echo e($placeholder ?? ''); ?>"
            value="<?php echo e(old($value ?? false)); ?>"
            id="input-<?php echo e($name); ?>"
            <?php echo e(($required ?? false) ? 'required' : ''); ?>

            <?php echo e($attributes->merge(['class' => 'w-full rounded-lg border border-stroke bg-while py-3 pl-2 pr-2 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary'])); ?>

        >
        <?php echo e($buttons ?? null); ?>

    </div>

    <?php echo e($slot); ?>


    <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <?php if(isset($icon)): ?>
        <span class="absolute right-4 top-4">
            <?php echo $icon; ?>

        </span>
    <?php endif; ?>
</div>

<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/components/fields/text.blade.php ENDPATH**/ ?>