<?php $__env->startSection('content'); ?>
    <div class="container mx-auto">
        <div class="flex  p-10 justify-center">
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
                    <div class="bg-green-400 px-4 py-3 rounded-t-lg text-2xl font-bold text-center"><?php echo e(__('پرسشنامه جمعیت شناختی
')); ?></div>

                    <div class="px-8 py-6 pr-15">

                    <form action="<?php echo e(route('survey.form',['step'=> 1])); ?>" method="POST" id="register-form">

                            <?php echo csrf_field(); ?>
                            <div class="border mb-6 bg-green-50 inline-block  p-3 w-full items-stretch
                                      border-gray-300 rounded-lg">
                                        <label  class="ms-1 text-sm font-medium text-gray-900 dark:text-gray-300">تحصیلات :</label>
                                            <select name="education" class="bg-green-200 p-2 float-left ml-2 p-3" >
                                            <option value="<?php echo e(old('education')); ?>">یک گزینه را انتخاب کنید</option>
                                           <option value="associate_below">کاردانی و پایینتر </option>
                                           <option value="masters">کارشناسی</option>--}}
                                           <option value="associate_above">کارشناسی ارشد و بالاتر</option>
                                </select>
                            </div>


                            <div class="border mb-6 bg-green-100 inline-block p-3 w-full items-stretch
                                  border-gray-300 rounded-lg">
                                <label  class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">وضعیت تاهل :</label>

                                        <select name="marital_status" class="bg-green-200 p-2 float-left ml-2 p-3" required>
                                            <option value="<?php echo e(old('marital_status')); ?>">یک گزینه را انتخاب کنید</option>
                                            <option value="married">متاهل </option>
                                            <option value="single">مجرد</option>
                                        </select>
                                    </div>

                                <div class="border mb-6 bg-green-100 inline-block p-3 w-full items-stretch
                                  border-gray-300 rounded-lg">
                                    <label  class=" text-sm font-medium text-gray-900 dark:text-gray-300">جنسیت :</label>
                                    <select name="gender" class="bg-green-200 p-2 float-left ml-2 p-3" required>
                                        <option value="<?php echo e(old('gender')); ?>">یک گزینه را انتخاب کنید</option>
                                        <option value="woman">زن</option>
                                        <option value="man">مرد</option>
                                    </select><br>
                                </div>

                                <div class="border bg-green-100 mb-6 w-full inline-block  p-3 border-gray-300 rounded-lg">
                                    <label  class=" text-sm font-medium text-gray-900 dark:text-gray-300">میزان درآمد :</label>
                                    <select name="income" class="bg-green-200 p-2 float-left  p-3" required>
                                        <option value="<?php echo e(old('income')); ?>">یک گزینه را انتخاب کنید</option>
                                        <option value="below_10m">پایین تر از 10میلیون تومان </option>
                                        <option value="between_10_20">ین 10 تا 20 میلیون تومان</option>
                                        <option value="above_20"> بیش از 20 میلیون تومان</option>
                                </select><br>
                                </div>

                                <div class="border bg-green-100 mb-6 w-full inline-block  p-3 border-gray-300 rounded-lg">
                                    <label  class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">سن     :</label>
                                    <select name="old" class="bg-green-200  ml-2 p-3" required>
                                        <option value="<?php echo e(old('old')); ?>">یک گزینه را انتخاب کنید</option>
                                        <option value="below_20"> کمتر از 20 سال</option>
                                        <option value="between_20-30">20 تا 30 سال </option>
                                        <option value="between_31-40">31 تا 40 سال </option>
                                        <option value="above_40">بیشتر از 40 سال</option>
                                    </select><br>
                                    </div>

                            <div class="border bg-green-100 mb-6 w-full inline-block  p-3 border-gray-300 rounded-lg">
                                    <label  class=" text-sm font-medium text-gray-900 dark:text-gray-300">شماره تلفن    :</label>
     <input type="number" id="number-input" name="number_phone"  value="<?php echo e(old('number_phone')); ?>" aria-describedby="helper-text-explanation"
            class="bg-green-200 p-2 float-left ml-2 " placeholder="09181234567" required />
                                <div id="number_phone-error" class="text-danger text-red-700"></div>
                            </div>






                                <div class="border  bg-green-100  mb-6 w-full inline-block p-3 border-gray-300 rounded-lg">
                                    <label  class=" text-sm font-medium text-gray-900 dark:text-gray-300"> شغل :</label>
                                    <span id="job-error" class="text-danger"></span>
                                    <input id="message" rows="4" type="text" value="<?php echo e(old('job')); ?>"
                                       class="bg-green-200 py-2 "
                                       name="job" placeholder="شغل خود را وارد کنید..." required/>

                                </div>
                                <br>
                                <button type="submit"
                                        class="relative top-3 text-white w-full max-w-xl bg-gradient-to-br
                                     from-green-400 to-blue-600
                                         hover:bg-gradient-to-bl focus:ring-4 focus:outline-none
                                         focus:ring-green-200 dark:focus:ring-green-800 font-medium
                                         rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">ادامه </button>


                       </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const form = document.getElementById('register-form');

            form.addEventListener('input', function(event) {
                const formData = new FormData(form);
                axios.post('/validate-input', formData)
                    .then(response => {
                        clearErrors();
                        if (response.data.errors) {
                            showErrors(response.data.errors);
                        }
                    })
                    .catch(error => {
                        console.error(error);
                    });
            });

            function clearErrors() {
                document.querySelectorAll('.text-danger').forEach(element => {
                    element.innerHTML = '';

                });
            }

            function showErrors(errors) {
                for (const key in errors) {
                    if (errors.hasOwnProperty(key)) {

                        document.getElementById(`${key}-error`).innerHTML = errors[key][0]
                    }
                }
            }
        });
    </script>


        </body>
    </html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/omatyir/domains/omaty.ir/core/resources/views/welcome.blade.php ENDPATH**/ ?>