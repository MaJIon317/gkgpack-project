<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'color' => 'success', 
    'message' => false,
    'description' => false,
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'color' => 'success', 
    'message' => false,
    'description' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php if($color == 'error'): ?>

    <div class="inline-flex w-full bg-white shadow-md rounded-lg overflow-hidden">
        <div class="flex justify-center items-center w-12 bg-red-500">
            <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z"></path>
            </svg>
        </div>
        
        <div class="-mx-3 py-2 px-4">
            <div class="mx-3">
                <?php if($message): ?>
                    <span class="text-red-500 font-semibold"><?php echo $message; ?></span>
                <?php endif; ?>

                <?php if($description): ?>
                    <p class="text-gray-600 text-sm"><?php echo $description; ?></p>
                <?php endif; ?>

                <?php if($slot): ?>
                    <div class="text-gray-600 mt-2 text-sm"><?php echo $slot; ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php elseif($color == 'warning'): ?>

    <div class="inline-flex w-full bg-white shadow-md rounded-lg overflow-hidden">
        <div class="flex justify-center items-center w-12 bg-yellow-500">
            <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"></path>
            </svg>
        </div>
        
        <div class="-mx-3 py-2 px-4">
            <div class="mx-3">
                <?php if($message): ?>
                    <span class="text-yellow-500 font-semibold"><?php echo $message; ?></span>
                <?php endif; ?>
                <?php if($description): ?>
                    <p class="text-gray-600 text-sm"><?php echo $description; ?></p>
                <?php endif; ?>

                <?php if($slot): ?>
                    <div class="text-gray-600 mt-2 text-sm"><?php echo $slot; ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php elseif($color == 'info'): ?>

    <div class="inline-flex w-full bg-white shadow-md rounded-lg overflow-hidden">
        <div class="flex justify-center items-center w-12 bg-blue-500">
            <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"></path>
            </svg>
        </div>
        
        <div class="-mx-3 py-2 px-4">
            <div class="mx-3">
                <?php if($message): ?>
                    <span class="text-blue-500 font-semibold"><?php echo $message; ?></span>
                <?php endif; ?>
                <?php if($description): ?>
                    <p class="text-gray-600 text-sm"><?php echo $description; ?></p>
                <?php endif; ?>

                <?php if($slot): ?>
                    <div class="text-gray-600 mt-2 text-sm"><?php echo $slot; ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php else: ?>

    <div class="inline-flex w-full bg-white shadow-md rounded-lg overflow-hidden">
        <div class="flex justify-center items-center w-12 bg-green-500">
            <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"/>
            </svg>
        </div>
        
        <div class="-mx-3 py-2 px-4">
            <div class="mx-3">
                <?php if($message): ?>
                    <span class="text-green-500 font-semibold"><?php echo $message; ?></span>
                <?php endif; ?>
                <?php if($description): ?>
                    <p class="text-gray-600 text-sm"><?php echo $description; ?></p>
                <?php endif; ?>

                <?php if($slot): ?>
                    <div class="text-gray-600 mt-2 text-sm"><?php echo $slot; ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php endif; ?>

<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/components/alert.blade.php ENDPATH**/ ?>