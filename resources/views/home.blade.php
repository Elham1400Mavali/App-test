@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="flex  p-2 justify-center">
            <div class="w-full max-w-4xl ">
                <div class="bg-green-600 shadow-xl rounded-xl">
                    <div class="bg-green-400 px-4 py-3 rounded-t-lg text-2xl font-bold text-center">برای پر کردن فرم وارد شوید</div>

                    <div class="px-8 py-6">
                        <div class="px-8 py-6">
                <div class="px-8 py-6">
                    @if (session('status'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif




                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
