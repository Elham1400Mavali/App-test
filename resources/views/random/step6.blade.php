@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="flex  p-2 justify-center">
            <div class="w-full max-w-4xl ">
                <div class="bg-green-600 shadow-xl rounded-xl">
                    <div class="bg-green-400 px-4 py-3 rounded-t-lg text-2xl font-bold text-center">تبلیغات مرحله آخر</div>

                    <div class="pr-8 py-6 ml-5">

                        @if(session('success'))
                            <p>{{ session('success') }}</p>
                        @endif
                        <form action="{{ route('random.step.store',['step'=>7]) }}" method="POST">
                            @csrf

                            <div class="grid gap-4">
                                <div>
                                    <input type="hidden" name="advertise6" value="{{ $imagePath }}">
                                      <img class="h-auto max-w-md mx-auto rounded-lg shadow-xl dark:shadow-gray-800"
                                         src="{{ $imagePath }}" alt="">
                                </div>
                                <label  class="bg-green-50 text-md  p-4 bg-blue-300 rounded-lg text-1xl font-bold text-center dark:text-gray-300">
                                    ** از بین تصاویر زیر کدام گزینه از نگاه شما بیشترین ارتباط را با تصویر بالا دارد؟ ( حداقل  5 تصویر را انتخاب کنید ) ** </label>

                                <ul class="grid p-3 grid-cols-3 mr-0 md:grid-cols-5 gap-6">
                                    @foreach($randomImages as $image)

                                        <li>
                                            <input type="checkbox" name="selected_images[]" id="react-option"
                                                   value="{{ $image }}" class=" peer" >
                                            <label for="react-option" class="h-30 inline-flex items-center justify-between max-w-full p-3 text-gray-500 bg-white border-2
                                        border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600
                                         hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400
                                         dark:bg-gray-800 dark:hover:bg-gray-700 ">
                                                <div class="block">
                                                    <style>
                                                        .max-w-full {
                                                            width:150px;
                                                        }
                                                    </style>
                                                    <img class="h-20 max-w-full rounded-lg"
                                                         src="{{ $image }}" alt="">

                                                </div>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>

                                <input type="hidden" name="step" value="{{ $step }}">
                                <div class="border mb-6  border-gray-300 rounded-lg">
                                    @foreach($questionPerStep['questions'] as $key=>$step1)
                                        <input type="hidden" name="question[]" value="{{ $step1['question'] }}">
                                        <div class="border mb-6 bg-green-50 inline-block p-3 w-full
                                    items-stretch border-gray-300 rounded-lg">

                                            <label  class="bg-green-50 ms-2 text-md font-large text-gray-900 dark:text-gray-300">{{ $step1['question'] }} </label>
                                            <div class="space-y-2 flex items-center bg-green-200 p-2 border border-gray-300
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
                                                    <input type="radio" value="disagree" name="selected_option{{ $key }}"
                                                           class="w-4 h-4 text-green-800 bg-gray-100 border-gray-300
                                                       focus:ring-green-600 dark:focus:ring-green-700 dark:ring-offset-gray-900
                                                       focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                                                    <label class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"> مخالفم</label>
                                                </div>

                                                <div class="flex items-center me-4">
                                                    <input type="radio" value="completely_disagree" name="selected_option{{ $key }}"
                                                           class="w-4 h-4 text-green-800 bg-gray-100 border-gray-300
                                                       focus:ring-green-600 dark:focus:ring-green-700 dark:ring-offset-gray-900
                                                       focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                                                    <label class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300" >کاملا مخالفم</label>
                                                </div>
                                                <div class="flex items-center me-4">
                                                    <input type="radio" value="neutral" name="selected_option{{ $key }}"
                                                           class="w-4 h-4 text-green-800 bg-gray-100 border-gray-300
                                                       focus:ring-green-600 dark:focus:ring-green-700 dark:ring-offset-gray-900
                                                       focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                                                    <label class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">خنثی </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-between">
                                        </div>
                                    @endforeach
                                </div>
                                <div>
                                    <div class="relative">
                                        <input type="text" id="filled_success"  name="comment6" aria-describedby="filled_success_help"
                                               class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900
                                               bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-green-600
                                               dark:border-green-500 appearance-none dark:text-white dark:focus:border-green-500
                                                focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required/>
                                        <label for="filled_success" class="absolute text-sm text-green-600 dark:text-green-500
                                         duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5
                                         peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0
                                         peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4
                                         rtl:peer-focus:left-auto">یک جمله در باره تبلیغ بالا بنویسید</label>
                                    </div>
                                    <p id="filled_success_help" class="mt-2 text-xs text-green-600 dark:text-green-400"><span class="font-medium">Well done!</span> Some success message.</p>
                                </div>


                            </div>

                            <button type="submit"
                                        class="relative top-3 text-white w-full max-w-xl bg-gradient-to-br
                                     from-green-400 to-blue-600
                                         hover:bg-gradient-to-bl focus:ring-4 focus:outline-none
                                         focus:ring-green-200 dark:focus:ring-green-800 font-medium
                                         rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 "> ثبت فرم و ارسال </button>
                        </form>
                        </form>
                    </div>                </div>
            </div>
        </div>
    </div>
@endsection
