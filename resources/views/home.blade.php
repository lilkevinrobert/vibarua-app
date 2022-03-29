@extends('layouts.app2')
@section('title','Nyumbani')


@section('content')

<div class="flex justify-center urefu w-full bg-red-100">
    <div class="pane-1 h-full w-1/2 flex items-center justify-center">
        <div class="flex">
            <div class="text-center">
                <h1 class="text-white md:text-4xl mb-2 font-bold">NATAFUTA WAFANYAKAZI</h1>
                <p class="font-semibold text-white">Kuna kazi zaidi ya 1,000 zinatafuta wachapakazi kila siku. Fungua akaunti yako leo uanze kufurahia kazi hizi kirahisi.</p>
                <button type="button" class="font-medium tracking-wide mt-10 text-white bg-red-700 hover:bg-red-800 focus:ring-4  focus:outline-none focus:ring-red-500 font-medium rounded-lg text-l px-8 py-2.5 text-center mr-3 md:mr-0 ">NATAFUTA WAFANYAKAZI</button>
            </div>
        </div>
    </div>

    <div class="pane-2 h-full w-1/2 flex items-center justify-center">
        <div class="flex">
            <div class="text-center">
                <h1 class="text-white md:text-4xl mb-2 font-bold">NATAFUTA KAZI</h1>
                <p class="font-semibold text-white">Kuna kazi zaidi ya 1,000 zinatafuta wachapakazi kila siku. Fungua akaunti yako leo uanze kufurahia kazi hizi kirahisi.</p>
                <button type="button" class="font-medium tracking-wide mt-10 text-white bg-red-700 hover:bg-red-800 focus:ring-4  focus:outline-none focus:ring-red-500 rounded-lg text-l px-8 py-2.5 text-center mr-3 md:mr-0 ">NATAFUTA KAZI</button>
            </div>
        </div>
    </div>
</div>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-24 md:mt-24 ">
    <div class="p-4">
        <form action="">
            <label for="table-search" class="sr-only">Tafuta</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="table-search" name="query" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  " placeholder="Tafuta Kazi">
            </div>
        </form>
    </div>
    <table class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
        <tr>

            <th scope="col" class="px-6 py-3">
                Mwajiri
            </th>
            <th scope="col" class="px-6 py-3">
                Kazi
            </th>
            <th scope="col" class="px-6 py-3">
                Category
            </th>

        </tr>
        </thead>
        <tbody>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                Apple MacBook Pro 17"
            </th>
            <td class="px-6 py-4">
                Sliver
            </td>

            <td class="px-6 py-4 text-right">
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
            </td>
        </tr>


        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                Microsoft Surface Pro
            </th>
            <td class="px-6 py-4">
                White
            </td>
            <td class="px-6 py-4">
                Laptop PC
            </td>
            <td class="px-6 py-4">
                $1999
            </td>
            <td class="px-6 py-4 text-right">
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
            </td>
        </tr>
        <tr class="bg-white border-b ">

            <th scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                Microsoft Surface Pro
            </th>
            <td class="px-6 py-4">
                White
            </td>
            <td class="px-6 py-4">
                Laptop PC
            </td>
            <td class="px-6 py-4">
                $1999
            </td>
            <td class="px-6 py-4 text-right">
                <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
            </td>
        </tr>
        </tbody>
    </table>
</div>


{{--
The grid system images
--}}




<h1 class="text-center text-red-600 font-bold pt-10 pb-3 text-4xl pb-10 ">Aina ya Kazi Maarufu zipatikanazo</h1>


<div class="grid lg:grid-cols-4 md:grid-cols-3  gap-2 mx-24">

    <div class="max-w-sm  bg-white rounded-lg shadow-md hover:shadow-lg ">
        <a href="#">
            <img class="p-1 rounded-t-lg" src="{{asset('assets/images/msusi.jpeg')}}"  alt="product image">
        </a>
        <div class="px-0 pb-0">
            <a href="#">
                <h5 class="text-lg text-center font-semibold tracking-wide text-red-600  text-gray-900 ">Ususi</h5>
            </a>
        </div>
    </div>



    <div class="max-w-sm  bg-white rounded-lg shadow-md hover:shadow-lg ">
        <a href="#">
            <img class="p-1 rounded-t-lg" src="{{asset('assets/images/Kilimo.jpg')}}" alt="Kilimo">
        </a>
        <div class="px-0 pb-0">
            <a href="#">
                <h5 class="text-lg text-center font-semibold tracking-wide text-red-600  text-gray-900 ">Kilimo</h5>
            </a>
        </div>
    </div>


    <div class="max-w-sm bg-white rounded-lg shadow-md hover:shadow-lg ">
        <a href="#">
            <img class="p-1 rounded-t-lg" src="{{asset('assets/images/ufundi.jpeg')}}" alt="product image">
        </a>
        <div class="px-0 pb-0">
            <a href="#">
                <h5 class="text-lg text-center font-semibold tracking-wide text-red-600  text-gray-900 ">Ufundi</h5>
            </a>
        </div>
    </div>


    <div class="max-w-sm  bg-white rounded-lg shadow-md hover:shadow-lg ">
        <a href="#">
            <img class="p-1 rounded-t-lg" src="{{asset('assets/images/ujenzi.jpeg')}}"  alt="product image">
        </a>
        <div class="px-0 pb-0">
            <a href="#">
                <h5 class="text-lg text-center font-semibold tracking-wide text-red-600  text-gray-900 ">Ususi</h5>
            </a>
        </div>
    </div>


    <div class="max-w-sm  bg-white rounded-lg shadow-md hover:shadow-lg ">
        <a href="#">
            <img class="p-1 rounded-t-lg" src="{{asset('assets/images/usafi.jpeg')}}" alt="product image">
        </a>
        <div class="px-0 pb-0">
            <a href="#">
                <h5 class="text-lg text-center font-semibold tracking-wide text-red-600  text-gray-900 ">Ufundi</h5>
            </a>
        </div>
    </div>


    <div class="max-w-sm  bg-white rounded-lg shadow-md hover:shadow-lg ">
        <a href="#">
            <img class="p-1 rounded-t-lg" src="{{asset('assets/images/usafi1.jpeg')}}" alt="product image">
        </a>
        <div class="px-0 pb-0">
            <a href="#">
                <h5 class="text-l text-center font-semibold tracking-tight text-gray-900 ">Ufundi</h5>
            </a>
        </div>
    </div>


    <div class="max-w-sm  bg-white rounded-lg shadow-md hover:shadow-lg ">
        <a href="#">
            <img class="p-1 rounded-t-lg" src="{{asset('assets/images/ufugaji.jpeg')}}" alt="product image">
        </a>
        <div class="px-0 pb-0">
            <a href="#">
                <h5 class="text-l text-center font-semibold tracking-tight text-gray-900">Ufundi</h5>
            </a>
        </div>
    </div>


    <div class="max-w-sm bg-white rounded-lg shadow-md hover:shadow-lg ">
        <a href="#">
            <img class="p-1 rounded-t-lg" src="{{asset('assets/images/kiwandani.jpeg')}}" alt="product image">
        </a>
        <div class="px-0 pb-0">
            <a href="#">
                <h5 class="text-l text-center font-semibold tracking-tight text-gray-900 ">Kiwandani</h5>
            </a>
        </div>
    </div>


    <div class="max-w-sm  bg-white rounded-lg shadow-md hover:shadow-lg ">
        <a href="#">
            <img class="p-1 rounded-t-lg" src="{{asset('assets/images/kinyozi.jpeg')}}" alt="product image">
        </a>
        <div class="px-0 pb-0">
            <a href="#">
                <h5 class="text-l text-center font-semibold tracking-tight text-gray-900 ">Ufundi</h5>
            </a>
        </div>
    </div>


    <div class="max-w-sm  bg-white rounded-lg shadow-md hover:shadow-lg ">
        <a href="#">
            <img class="p-1 rounded-t-lg" src="{{asset('assets/images/msusi.jpeg')}}"  alt="product image">
        </a>
        <div class="px-0 pb-0">
            <a href="#">
                <h5 class="text-lg text-center font-semibold tracking-wide text-red-600  text-gray-900 ">Udereva</h5>
            </a>
        </div>
    </div>

    <div class="max-w-sm  bg-white rounded-lg shadow-md hover:shadow-lg ">
        <a href="#">
            <img class="p-1 rounded-t-lg" src="{{asset('assets/images/usafi.jpeg')}}"  alt="product image">
        </a>
        <div class="px-0 pb-0">
            <a href="#">
                <h5 class="text-lg text-center font-semibold tracking-wide text-red-600  text-gray-900 ">Udereva</h5>
            </a>
        </div>
    </div>

</div>




@endsection


@section('grid')
    @include('layouts.grid')
@endsection
