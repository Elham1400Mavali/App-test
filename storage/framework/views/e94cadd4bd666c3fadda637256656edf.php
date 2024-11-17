<?php $__env->startSection('content'); ?>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full max-w-3xl ">
                <?php if($errors->any()): ?>
                    <span class="font-medium">فیلد های زیر به درستی وارد نشده اند.:</span>
                    <ul class="mt-1.5 list-disc list-inside ">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="ms-2 text-sm font-medium text-gray-900 red:text-red-300"><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    </span>
                <?php endif; ?>
                <div class="bg-green-600 shadow-xl rounded-xl">
                    <div class="bg-green-400 px-4 py-3 rounded-t-lg text-2xl font-bold text-center"><?php echo e($questionPerStep['title']); ?></div>

                    <div class="px-8 py-6 ">
                        <main class="mt-6">
                            <form action="<?php echo e(route('survey.form',['step'=> 5])); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="step" value="<?php echo e($step); ?>">
                                <div class="border mb-6  border-gray-300 rounded-lg">
                                    <?php $__currentLoopData = $questionPerStep['questions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$step1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <input type="hidden" name="question[]" value="<?php echo e($step1['question']); ?>">
                                        <div class="border mb-6 bg-green-50 inline-block p-3 w-full
                                    items-stretch border-gray-300 rounded-lg">

                                            <label  class="bg-green-50 ms-2 text-md font-large text-gray-900 dark:text-gray-300"><?php echo e($step1['question']); ?> </label>
                                            <div class="space-y-2 flex flex-wrap items-center bg-green-200 p-2 border border-gray-300
                                        border-solid rounded-md	 mt-4 mb-4 ml-2 p-3">
                                                <div class="flex items-center me-4">
                                                    <input type="radio" value="agree" name="<?php echo 'selected_option' . $key ?>"
                                                           class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300
                                                       focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800
                                                       focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                                                    <label class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">موافقم</label>
                                                </div>
                                                <div class="flex items-center me-4">
                                                    <input type="radio" value="completely_agree" name="<?php echo 'selected_option' . $key  ?>"
                                                           class="w-4 h-4 text-green-800 bg-gray-100 border-gray-300
                                                       focus:ring-green-600 dark:focus:ring-green-700 dark:ring-offset-gray-900
                                                       focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                                                    <label class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">کاملا موافقم</label>
                                                </div>
                                                <div class="flex items-center me-4">
                                                    <input type="radio" value="disagree" name="selected_option<?php echo e($key); ?>"
                                                           class="w-4 h-4 text-green-800 bg-gray-100 border-gray-300
                                                       focus:ring-green-600 dark:focus:ring-green-700 dark:ring-offset-gray-900
                                                       focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                                                    <label class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"> مخالفم</label>
                                                </div>

                                                <div class="flex items-center me-4">
                                                    <input type="radio" value="completely_disagree" name="selected_option<?php echo e($key); ?>"
                                                           class="w-4 h-4 text-green-800 bg-gray-100 border-gray-300
                                                       focus:ring-green-600 dark:focus:ring-green-700 dark:ring-offset-gray-900
                                                       focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                                                    <label class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">کاملا مخالفم</label>
                                                </div>
                                                <div class="flex items-center me-4">
                                                    <input type="radio" value="neutral" name="selected_option<?php echo e($key); ?>"
                                                           class="w-4 h-4 text-green-800 bg-gray-100 border-gray-300
                                                       focus:ring-green-600 dark:focus:ring-green-700 dark:ring-offset-gray-900
                                                       focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                                                    <label class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">خنثی </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-between">
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                             <button type="submit"
                                        class="relative top-3 text-white w-full max-w-xl bg-gradient-to-br
                                     from-green-400 to-blue-600
                                         hover:bg-gradient-to-bl focus:ring-4 focus:outline-none
                                         focus:ring-green-200 dark:focus:ring-green-800 font-medium
                                         rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">ادامه </button>
                            </form>
                        </main>
                    </div>
                    </div>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/omatyir/domains/omaty.ir/core/resources/views/forms/step4.blade.php ENDPATH**/ ?>