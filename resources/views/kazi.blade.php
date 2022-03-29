@extends('layouts.app2')
@section('title','Kazi')

@section('content')

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg container mx-auto">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Kazi
                </th>
                <th scope="col" class="px-6 py-3">
                    Mwajiri
                </th>
                <th scope="col" class="px-6 py-3">
                    Eneo
                </th>
                <th scope="col" class="px-6 py-3">

                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                    Ufundi gereji
                </th>
                <td class="px-6 py-4">
                    ABC Motors
                </td>
                <td class="px-6 py-4">
                    Nyakato,Mwanza
                </td>
                <td class="px-6 py-4">
                    <a href="{{ url('mawasiliano') }} " class="btn bg-red-600">Omba</a>
                </td>

            </tr>
            <tr class="bg-white border-b ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                    Ufundi gereji
                </th>
                <td class="px-6 py-4">
                    ABC Motors
                </td>
                <td class="px-6 py-4">
                    Nyakato,Mwanza
                </td>
                <td class="px-6 py-4">
                    <a href="{{ url('mawasiliano') }} " class="btn bg-red-600">Omba</a>
                </td>

            </tr>
            <tr class="bg-white border-b ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                    Ufundi gereji
                </th>
                <td class="px-6 py-4">
                    ABC Motors
                </td>
                <td class="px-6 py-4">
                    Nyakato,Mwanza
                </td>
                <td class="px-6 py-4">
                    <a href="{{ url('mawasiliano') }} " class="btn bg-red-600">Omba</a>
                </td>

            </tr>
            </tbody>
        </table>
    </div>




@endsection
