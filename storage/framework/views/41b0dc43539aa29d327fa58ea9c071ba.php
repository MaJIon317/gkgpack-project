<div>
    <!--[if BLOCK]><![endif]--><?php if($object?->activities()->whereNot('subject_event', 'created')->count()): ?>
        <div class="flex flex-col gap-2 p-3 border rounded">
            <h3 class="font-bold text-black mb-2 flex flex-wrap gap-2 justify-between">
                <span class="inline-flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                        <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z"/>
                        <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
                        <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
                    </svg>
                    <?php echo e(__('History')); ?>

                </span>

                <a href="<?php echo e(route('user.activity', ['subject_type' => $object->getMorphClass(), 'subject_id' => $object->getKey()])); ?>"
                   target="_blank"
                   class="text-indigo-400 hover:text-indigo-700 text-xs">

                    <?php echo e(__('View the entire history')); ?>

                </a>
            </h3>
            <div class="flex flex-col gap-2 overflow-auto max-h-32 text-sm">

                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $object->activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex items-start gap-4 justify-between pr-2 border-b pb-2">
                        <div class="flex flex-wrap gap-1">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $activity->properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-sm">
                                    <string><?php echo e($key); ?>:</string>
                                    <span><?php echo e($property); ?></span>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>

                        <div class="flex gap-2">
                            <span class="text-xs min-w-max">
                                <u><?php echo e($activity->created_at->diffForHumans()); ?></u>
                            </span>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

            </div>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

</div>
<?php /**PATH /home/ubuntu/work/ruslan-laravel/resources/views/components/history.blade.php ENDPATH**/ ?>