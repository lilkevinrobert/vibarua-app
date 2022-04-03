@extends('layouts.app2')
@section('title','Ajiri')

@section('content')


    <div class="container mx-auto w-3/5 md:px-20 px-4 border border-red-300 py-4 rounded-lg">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center text-red-600">Karibu Vibarua ChapChap Utangaze ajira nasi</h5>


    <form action="/mwajiri" method="post" class="pt-8">

        @csrf
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-semibold text-gray-900 ">Jina la mwajiri</label>
            <input type="text" id="name" name="name" placeholder="Mfano: ABC Motors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
            @error('name')
            <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-semibold text-gray-900 ">Barua pepe</label>
            <input type="email" name="email" placeholder="Mfano: JohnJeremiah@gmail.com" id="namba" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
            @error('email')
            <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="namba" class="block mb-2 text-sm font-semibold text-gray-900 ">Nambari simu</label>
            <input type="number" name="phone" placeholder="0712346523" id="namba" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
            @error('phone')
            <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="eneo" class="block mb-2 text-sm font-semibold text-gray-900 ">Eneo la Kazi</label>
            <input type="text" id="eneo" name="eneo" placeholder="Mfano: Mwanza,Nyakato" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
            @error('eneo')
            <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="base-input" class="block mb-2 text-sm font-semibold text-gray-900 ">Aina ya kazi</label>
            <input type="text" name="kazi" placeholder="Mfano: Kazi za ndani" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
            @error('kazi')
            <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <label for="message" class="block mb-2 text-sm font-semibold text-gray-900 ">Maelezo Kuhusu Kazi</label>
        <textarea id="message" name="maelezo" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Maelezo Kuhusu Kazi..." required></textarea>
        @error('maelezo')
        <div class="text-red-600">{{ $message }}</div>
        @enderror

        <div class="flex justify-center  ">
            <button type="submit" name="submit" class="btn bg-red-600 my-4 " value="chapisha">Chapisha</button>
        </div>
    </form>
</div>

@endsection

@section('footer')
    @include('layouts.footer')
@endsection

