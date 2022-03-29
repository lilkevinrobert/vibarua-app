@extends('layouts.app2')
@section('title','Ingia')

@section('content')


    <div class=" p-4 max-w-sm mx-auto mt-12 mb-12 bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8  ">
        <form class="space-y-6" action="{{ route('login') }}" method="post">

            @csrf
            <h5 class="text-xl font-medium text-gray-900 text-center text-2xs text-red-600">Ingia</h5>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Barua pepe/ Nambari ya simu</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name@company.com" required="">
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Neno siri</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required="">
            </div>
            <div class="flex items-start">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 " >
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="remember" class="font-medium text-gray-900 ">Kumbuka Taarifa</label>
                    </div>
                </div>

                {{--to be implemented--}}
                {{--<a href="#" class="ml-auto text-sm text-blue-700 hover:underline ">Lost Password?</a>--}}
            </div>
            <button type="submit" class="w-full text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:hover:bg-red-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Ingia</button>
            <div class="text-sm font-medium text-gray-500 ">
                Je haujasajiliwa? <a href="{{ route('register') }}" class="text-blue-700 hover:underline ">Tengeneza akaunti</a>
            </div>
        </form>
    </div>


@endsection


@section('footer')
    @include('layouts.footer')
@endsection
