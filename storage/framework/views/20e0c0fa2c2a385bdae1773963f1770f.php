<?php $__env->startSection('content'); ?>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded-lg">
                    <div class="bg-green-200 px-4 py-3 rounded-t-lg text-lg font-semibold"><?php echo e(__('تمام')); ?></div>

                    <div class="px-8 py-6">
                        <div class="px-8 py-6">
                            <div class="border mb-6 bg-green-50 inline-block p-5 w-full items-stretch
                                      border-gray-300 rounded-lg">
                            <?php if(session('success')): ?>

                                <div class=" text-lg text-color-green font-semibold">
                                    <?php echo e(session('success')); ?>

                                </div>
                            <?php endif; ?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/omatyir/domains/omaty.ir/core/resources/views/forms/complete.blade.php ENDPATH**/ ?>