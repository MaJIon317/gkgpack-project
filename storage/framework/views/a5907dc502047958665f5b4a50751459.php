<div>
    <?php if($paginator->hasPages()): ?>

        <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">

            
            <div class="flex flex-col gap-3 w-full lg:hidden">
                <div class="flex justify-between">
                    <span>
                        <?php if($paginator->onFirstPage()): ?>
                            <span
                                class="relative inline-flex items-center px-4 py-2 text-sm text-neutral-500 bg-white border border-neutral-200 rounded-md select-none dark:bg-neutral-800 dark:border-neutral-700">
                                <?php echo __('pagination.previous'); ?>

                            </span>
                        <?php else: ?>
                            <button type="button"
                                    wire:click="previousPage('<?php echo e($paginator->getPageName()); ?>')"
                                    wire:loading.attr="disabled"
                                    dusk="previousPage<?php echo e($paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName()); ?>.before"
                                    class="relative inline-flex items-center px-4 py-2 text-sm text-neutral-800 bg-white border border-neutral-200 rounded-md hover:text-neutral-500 focus:border-blue-300 active:bg-neutral-100 active:text-neutral-800 transition ease-in-out dark:bg-neutral-800 dark:border-neutral-700 dark:focus:border-blue-600 dark:text-neutral-300 dark:hover:text-white dark:focus:border-blue-600 dark:active:bg-neutral-900 dark:active:text-white">
                                <?php echo __('pagination.previous'); ?>

                            </button>
                        <?php endif; ?>
                    </span>
                    <span>
                        <?php if($paginator->hasMorePages()): ?>
                            <button type="button"
                                    wire:click="nextPage('<?php echo e($paginator->getPageName()); ?>')"
                                    wire:loading.attr="disabled"
                                    dusk="nextPage<?php echo e($paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName()); ?>.before"
                                    class="relative inline-flex items-center px-4 py-2 text-sm text-neutral-800 bg-white border border-neutral-200 rounded-md hover:text-neutral-500 focus:border-blue-300 active:bg-neutral-100 active:text-neutral-800 transition ease-in-out dark:bg-neutral-800 dark:border-neutral-700 dark:focus:border-blue-600 dark:text-neutral-300 dark:hover:text-white dark:focus:border-blue-600 dark:active:bg-neutral-900 dark:active:text-white">
                                <?php echo __('pagination.next'); ?>

                            </button>
                        <?php else: ?>
                            <span
                                class="relative inline-flex items-center px-4 py-2 text-sm text-neutral-500 bg-white border border-neutral-200 rounded-md select-none dark:bg-neutral-800 dark:border-neutral-700">
                                <?php echo __('pagination.next'); ?>

                            </span>
                        <?php endif; ?>
                    </span>
                </div>
            </div>

            
            <div class="hidden lg:flex-1 lg:flex lg:items-center lg:justify-between">
                <p class="text-sm text-neutral-800 dark:text-neutral-400">
                    <span><?php echo __('Showing'); ?></span>
                    <span class="font-bold"><?php echo e($paginator->firstItem()); ?></span>
                    <span><?php echo __('to'); ?></span>
                    <span class="font-bold"><?php echo e($paginator->lastItem()); ?></span>
                    <span><?php echo __('of'); ?></span>
                    <span class="font-bold"><?php echo e($paginator->total()); ?></span>
                    <span><?php echo __('results'); ?></span>
                </p>

                <div>
                    <span class="relative z-0 inline-flex rounded-md shadow-sm">
                        <span>
                            
                            <?php if($paginator->onFirstPage()): ?>
                                <span aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                                    <span
                                        class="relative inline-flex items-center px-2 py-2 text-sm text-neutral-500 bg-white border border-neutral-200 rounded-l-md dark:bg-neutral-800 dark:border-neutral-700"
                                        aria-hidden="true">
                                        <!-- Icon "chevron-left" (outline) from https://heroicons.com -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                                        </svg>
                                    </span>
                                </span>
                            <?php else: ?>
                                <button type="button"
                                        wire:click="previousPage('<?php echo e($paginator->getPageName()); ?>')"
                                        dusk="previousPage<?php echo e($paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName()); ?>.after"
                                        rel="prev"
                                        class="relative inline-flex items-center px-2 py-2 text-sm text-neutral-800 bg-white border border-neutral-200 rounded-l-md hover:text-neutral-500 focus:z-10 focus:border-blue-300 active:bg-neutral-100 active:text-neutral-500 transition ease-in-out dark:bg-neutral-800 dark:border-neutral-700 dark:focus:border-blue-600 dark:text-neutral-300 dark:hover:text-white dark:focus:border-blue-600 dark:active:bg-neutral-900 dark:active:text-white"
                                        aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                                    <!-- Icon "chevron-left" (outline) from https://heroicons.com -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                                    </svg>
                                </button>
                            <?php endif; ?>
                        </span>

                        
                        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <?php if(is_string($element)): ?>
                                <span aria-disabled="true">
                                    <span
                                        class="relative inline-flex items-center px-4 py-2 -ml-px text-sm text-neutral-800 bg-white border border-neutral-200 select-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300"><?php echo e($element); ?></span>
                                </span>
                            <?php endif; ?>

                            
                            <?php if(is_array($element)): ?>
                                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span wire:key="paginator-<?php echo e($paginator->getPageName()); ?>-page<?php echo e($page); ?>">
                                        <?php if($page == $paginator->currentPage()): ?>
                                            <span aria-current="page">
                                                <span
                                                    class="relative inline-flex items-center px-4 py-2 -ml-px text-sm text-neutral-500 bg-neutral-100 border border-neutral-200 select-none dark:bg-neutral-700 dark:border-neutral-700 dark:text-neutral-400"><?php echo e($page); ?></span>
                                            </span>
                                        <?php else: ?>
                                            <button type="button"
                                                    wire:click="gotoPage(<?php echo e($page); ?>, '<?php echo e($paginator->getPageName()); ?>')"
                                                    class="relative inline-flex items-center px-4 py-2 -ml-px text-sm text-neutral-800 bg-white border border-neutral-200 hover:text-neutral-500 focus:z-10 focus:border-blue-300 active:bg-neutral-100 active:text-neutral-800 transition ease-in-out dark:bg-neutral-800 dark:border-neutral-700 dark:focus:border-blue-600 dark:text-neutral-300 dark:hover:text-white dark:focus:border-blue-600 dark:active:bg-neutral-900 dark:active:text-white"
                                                    aria-label="<?php echo e(__('Go to page :page', ['page' => $page])); ?>">
                                                <?php echo e($page); ?>

                                            </button>
                                        <?php endif; ?>
                                    </span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <span>
                            
                            <?php if($paginator->hasMorePages()): ?>
                                <button type="button"
                                        wire:click="nextPage('<?php echo e($paginator->getPageName()); ?>')"
                                        dusk="nextPage<?php echo e($paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName()); ?>.after"
                                        rel="next"
                                        class="relative inline-flex items-center px-2 py-2 -ml-px text-sm text-neutral-800 bg-white border border-neutral-200 rounded-r-md hover:text-neutral-500 focus:z-10 focus:border-blue-300 active:bg-neutral-100 active:text-neutral-500 transition ease-in-out dark:bg-neutral-800 dark:border-neutral-700 dark:focus:border-blue-600 dark:text-neutral-300 dark:hover:text-white dark:focus:border-blue-600 dark:active:bg-neutral-900 dark:active:text-white"
                                        aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                                    <!-- Icon "chevron-right" (outline) from https://heroicons.com -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </button>
                            <?php else: ?>
                                <span aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                                    <span
                                        class="relative inline-flex items-center px-2 py-2 -ml-px text-sm text-neutral-500 bg-white border border-neutral-200 rounded-r-md dark:bg-neutral-800 dark:border-neutral-700"
                                        aria-hidden="true">
                                        <!-- Icon "chevron-right" (outline) from https://heroicons.com -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </span>
                                </span>
                            <?php endif; ?>
                        </span>
                    </span>
                </div>
            </div>

        </nav>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/gkgpack.su/public_html/vendor/ramonrietdijk/livewire-tables/resources/views/pagination/pagination.blade.php ENDPATH**/ ?>