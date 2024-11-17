<?php $__env->startSection('content'); ?>
    <div class="container mx-auto">
        <div class="flex  p-10 justify-center">
            <div class="w-full max-w-2xl ">
                <div class="bg-green-600 shadow-xl rounded-xl">
                    <div class="bg-green-400 px-4 py-3 rounded-t-lg text-2xl font-bold text-center"><?php echo e(__('فرم نظرسنجی')); ?></div>

                    <div class="px-8 py-6 ">
                        <main class="mt-6">
                            <form action="<?php echo e(route('survey.form.store',['step' => 2])); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php for($i = 7; $i <= 12; $i++): ?>

                                    <div class="border mb-6 bg-green-50 inline-block p-4 border-gray-300 rounded-lg">
                                        <label for="education" class="bg-green-50">question<?php echo e($i); ?> :</label>
                                        <select name="question<?php echo e($i); ?>" class="bg-green-200 p-2"  required>                                    <option value="" name=""></option>
                                            <option value="completely_disagree" name="completely_disagree">کاملا مخالفم</option>
                                            <option value="disagree"> مخالفم</option>
                                            <option value="neutral">خنثی</option>
                                            <option value="agree">موافقم</option>
                                            <option value="completely_agree">کاملا موافقم</option>
                                        </select>
                                        <br>
                                    </div>
                                <?php endfor; ?>
                                <button type="submit">مرحه بعد</button>
                            </form>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/makvandi/projects/survey/resources/views/forms/step2.blade.php ENDPATH**/ ?>