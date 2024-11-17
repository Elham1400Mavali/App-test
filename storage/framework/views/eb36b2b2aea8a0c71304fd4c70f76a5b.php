<?php $__env->startSection('content'); ?>
    <div class="container mx-auto">
        <div class="counterContainer">
            <svg class="counter">
                <circle cx="50%" cy="50%" r="70" style="stroke-dashoffset: 322px;"></circle>
            </svg>
            <span id="countdown-timer">18</span>
        </div>
        <div class="flex  p-10 justify-center">
            <div class="w-full max-w-3xl ">
                <div class="bg-green-600 shadow-xl rounded-xl">
                    <div class="bg-green-400 px-4 py-3 rounded-t-lg text-2xl font-bold text-center"><?php echo e(__('پرسشنامه جمعیت شناختی
')); ?></div>

                    <div class="px-8 py-6 pr-15">
                        <main class="mt-6 mr-7">


                            <form action="<?php echo e(route('survey.form.store',['step'=> 2])); ?>" method="POST">

                                <?php echo csrf_field(); ?>
                                <div class="border mb-6 bg-green-50 inline-block ml-2 p-3 w-full-50 items-stretch
                                      border-gray-300 rounded-lg">
                                    <label  class="ms-1 text-sm font-medium text-gray-900 dark:text-gray-300">تحصیلات :</label>
                                    <select name="education" class="bg-green-200 p-2 float-left ml-2 p-3" required>
                                        <option value="">یک گزینه را انتخاب کنید</option>
                                        <option value="associate_below">کاردانی و پایینتر </option>
                                        <option value="masters">کارشناسی</option>--}}
                                        <option value="associate_above">کارشناسی ارشد و بالاتر</option>
                                    </select>
                                </div>


                                <div class="border mb-6 bg-green-100 inline-block p-3 w-full-50 items-stretch
                                  border-gray-300 rounded-lg">
                                    <label  class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">وضعیت تاهل :</label>

                                    <select name="marital_status" class="bg-green-200 p-2 float-left ml-2 p-3" required>
                                        <option value="">یک گزینه را انتخاب کنید</option>
                                        <option value="married">متاهل </option>
                                        <option value="single">مجرد</option>
                                    </select>
                                </div>

                                <div class="border mb-6 bg-green-100 inline-block p-3  ml-2 w-full-50 items-stretch
                                  border-gray-300 rounded-lg">
                                    <label  class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">جنسیت :</label>
                                    <select name="gender" class="bg-green-200 p-2 float-left ml-2 p-3" required>
                                        <option value="">یک گزینه را انتخاب کنید</option>
                                        <option value="woman">زن</option>
                                        <option value="man">مرد</option>
                                    </select><br>
                                </div>

                                <div class="border bg-green-100 mb-6 w-full-50 inline-block  p-3 border-gray-300 rounded-lg">
                                    <label  class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">میزان درآمد :</label>
                                    <select name="income" class="bg-green-200 p-2 float-left ml-2 p-3" required>
                                        <option value="">یک گزینه را انتخاب کنید</option>
                                        <option value="below_10m">پایین تر از 10میلیون تومان </option>
                                        <option value="between_10_20">ین 10 تا 20 میلیون تومان</option>
                                        <option value="above_20"> بیش از 20 میلیون تومان</option>
                                    </select><br>
                                </div>

                                <div class="border bg-green-100 mb-6 w-full-60 inline-block ml-2 p-3 border-gray-300 rounded-lg">
                                    <label  class="ms-7 text-sm font-medium text-gray-900 dark:text-gray-300">سن     :</label>
                                    <select name="old" class="bg-green-200 p-2 float-left ml-2 p-3" required>
                                        <option value="">یک گزینه را انتخاب کنید</option>
                                        <option value="below_20"> کمتر از 20 سال</option>
                                        <option value="between_20-30">20 تا 30 سال </option>
                                        <option value="between_31-40">31 تا 40 سال </option>
                                    </select><br>
                                </div>

                                <div class="border bg-green-100 mb-6 w-full-50 inline-block  p-3 border-gray-300 rounded-lg">
                                    <label  class="ms-5 text-sm font-medium text-gray-900 dark:text-gray-300">شماره تلفن    :</label>
                                    <input type="number" id="number-input" name="number_phone" aria-describedby="helper-text-explanation"
                                           class="bg-green-200 p-2 float-left ml-2 p-3" placeholder="90210" required />


                                </div>

                                <div class="border bg-green-100  mb-6 w-full max-w-lg inline-block p-4 border-gray-300 rounded-lg">
                                    <label  class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"> شغل :</label>
                                    <input id="message" rows="4" class="bg-green-200 p-2 float-left ml-2 p-3"
                                           name="job" placeholder="شغل خود را وارد کنید..."></textarea>
                                </div>
                                <br>
                                <button type="submit"
                                        class="relative  top-5 text-white w-full max-w-xl left-4 right-5 bg-gradient-to-br  from-green-400 to-blue-600
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


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/makvandi/projects/survey/resources/views/forms/step1.blade.php ENDPATH**/ ?>