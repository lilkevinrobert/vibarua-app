@extends('layouts.app2')
@section('title','Ajiri')

@section('content')


    <div class="container mx-auto w-3/5 md:px-20 px-4">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center text-red-600">Karibu Vibarua ChapChap Utangaze ajira </h5>
        <p class="font-normal text-gray-700 mb-10">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>


    <form action="" method="post">

        @csrf
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-semibold text-gray-900 ">Jina la mwajiri</label>
            <input type="text" id="name" placeholder="Mfano: ABC Motors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-semibold text-gray-900 ">Barua pepe</label>
            <input type="email" placeholder="Mfano: JohnJeremiah@gmail.com" id="namba" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
        </div>

        <div class="mb-6">
            <label for="namba" class="block mb-2 text-sm font-semibold text-gray-900 ">Nambari simu</label>
            <input type="number" placeholder="0712346523" id="namba" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
        </div>

        <div class="mb-6">
            <label for="eneo" class="block mb-2 text-sm font-semibold text-gray-900 ">Eneo la Kazi</label>
            <input type="text" id="eneo" placeholder="Mfano: Mwanza,Nyakato" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
        </div>

        <div class="mb-6">
            <label for="base-input" class="block mb-2 text-sm font-semibold text-gray-900 ">Aina ya kazi</label>
            <input type="text" placeholder="Mfano: Kazi za ndani" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
        </div>

        <label for="message" class="block mb-2 text-sm font-semibold text-gray-900 ">Maelezo Kuhusu Kazi</label>
        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Maelezo Kuhusu Kazi..." required></textarea>

        <div class="flex justify-center  ">
            <button type="submit" name="submit" class="btn bg-red-600 my-4 " value="chapisha">Chapisha</button>
        </div>
    </form>
</div>

@endsection
