@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded-lg">
                    <div class="bg-green-200 px-4 py-3 rounded-t-lg text-lg font-semibold">{{ __('تمام') }}</div>

                    <div class="px-8 py-6">
                        <div class="px-8 py-6">
                            <div class="border mb-6 bg-green-50 inline-block p-5 w-full items-stretch
                                      border-gray-300 rounded-lg">
                            @if (session('success'))

                                <div class=" text-lg text-color-green font-semibold">
                                    {{ session('success') }}
                                </div>
                            @endif

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

