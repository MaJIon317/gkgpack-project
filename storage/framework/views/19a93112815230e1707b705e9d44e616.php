<div>

    <?php
        $user = auth()->user();

        $items = [];

        $items[] = [
            'name' => __('Create Order'),
            'click' => "Livewire.dispatch('openModal', {component: 'order-form'})",
            'role' => ['user'],
        ];

        $items[] = [
            'name' => __('Stock-In'),
            'click' => "Livewire.dispatch('openModal', {component: 'warehouse-registration-form'})",
            'role' => ['user', 'importer'],
        ];

        $items[] = [
            'name' => __('Stock-Out'),
            'click' => "Livewire.dispatch('openModal', {component: 'warehouse-reduce-form'})",
            'role' => ['user', 'importer'],
        ];

        $items[] = [
            'name' => __('Register New Product'),
            'click' => "Livewire.dispatch('openModal', {component: 'product-form'})",
            'role' => ['user', 'importer'],
        ];

    ?>

    <div class="flex flex-wrap gap-3 mb-5">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('scanLabel', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-661240091-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

        <?php if($items): ?>
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(($user->role->value == 'admin' || !isset($item['role']) || empty($item['role'])) || $user->hasRole($item['role'])): ?>
                    <button
                        type="button"
                        x-on:click="<?php echo $item['click']; ?>"
                        class="inline-flex items-center justify-center p-5 text-base font-medium text-gray-500 rounded-lg bg-gray-50 hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white"
                    >
                        <?php echo $item['icon'] ?? ''; ?>

                        <span class="w-full"><?php echo e($item['name']); ?></span>
                        <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>

</div>
<?php /**PATH /var/www/gkgpack.su/public_html/resources/views/dashboard.blade.php ENDPATH**/ ?>