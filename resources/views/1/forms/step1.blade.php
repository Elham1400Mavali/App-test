@extends('layouts.app')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="counterContainer">
        <svg class="counter">
            <circle cx="50%" cy="50%" r="35" style="stroke-dashoffset: 310px;"></circle>
        </svg>
        <span id="countdown-timer">2</span>
    </div>

    <div class="container mx-auto">

        <div class="flex  p-10 justify-center">
            <div class="w-full max-w-3xl ">
                @if ($errors->any())
                    <span class="font-medium">فیلد های زیر به درستی وارد نشده اند.:</span>
                    <ul class="mt-1.5 list-disc list-inside ">
                        @foreach ($errors->all() as $error)
                            <li class="ms-2 text-sm font-medium text-gray-900 red:text-red-300">{{ $error }}</li>
                        @endforeach
                    </ul>
                    </span>
                @endif

                <div class="bg-green-600 shadow-xl rounded-xl">
                    <div class="bg-green-400 px-4 py-3 rounded-t-lg text-2xl font-bold text-center">{{ $questionPerStep['title'] }}</div>

                    <div class="pr-8 py-6 ml-5">

                            <form action="{{ route('survey.form',['step'=> 2]) }}" method="POST">
                                @csrf
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
                                                    <input type="radio" value="agree"
                                                           name="<?php echo 'selected_option' . $key ?>"
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
                                <button type="submit"
                                        class="text-white bg-gradient-to-br from-green-400 to-blue-600
                                     hover:bg-gradient-to-bl focus:ring-4 focus:outline-none
                                     focus:ring-green-200 dark:focus:ring-green-800 font-medium
                                     rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">ثبت فرم</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

