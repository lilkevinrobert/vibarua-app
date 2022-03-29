@extends('layouts.app2')
@section('title','Jiunge')


@section('content')

    <div class=" p-4 max-w-sm mx-auto mt-4 mb-12 bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8  ">
        <form class="space-y-4" action="/register">

            @csrf
            <h5 class="text-xl font-semibold text-gray-900 text-center text-2xs text-red-600">Karibu, ujiunge nasi</h5>
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Jina Kamili</label>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Furaha Malipesa" required="">
                @error('name')
                <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 ">Nambari Ya simu</label>
                <input type="number" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name@company.com" required="">
                @error('phone')
                <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Barua pepe</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name@company.com" >
                @error('email')
                <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Neno siri</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required="">
                @error('password')
                <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Thibitisha Neno siri</label>
                <input type="password" name="cpassword" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required="">
                @error('cpassword')
                <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="w-full text-white bg-red-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Jiunge</button>
            <div class="text-sm font-medium text-gray-500 ">
                Je Tayari una akaunti? <a  class="text-blue-700 hover:underline " href="{{ url('login') }}">Ingia</a>
            </div>
        </form>
    </div>


@endsection

@section('footer')
    @include('layouts.footer')
@endsection
