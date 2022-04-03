@extends('layouts.app2')
@section('title','Tafuta')

@section('content')

    <h3 class="text-center text-red-600 font-semibold text-4xl mt-20 mb-10">Matokeo Ya Kutafuta</h3>
    <div class="flex flex-col container mx-auto">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    @if(isset($vibarua))
                    <table class="min-w-full">
                        <thead class="bg-white border-b">
                        <tr>
                            <th scope="col" class="text-medium font-bold text-red-600 px-6 py-4 text-left">
                                Kazi
                            </th>
                            <th scope="col" class="text-sm font-bold text-red-600 px-6 py-4 text-left">
                                Mwajiri
                            </th>
                            <th scope="col" class="text-sm font-bold text-red-600 px-6 py-4 text-left">
                                Eneo
                            </th>
                            <th scope="col" class="text-sm font-bold text-gray-900 px-6 py-4 text-center">

                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($vibarua) > 0)
                        @foreach($vibarua as $kz)
                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-md font-semibold text-gray-900">{{ $kz->kazi }}</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><a href="#">{{ $kz->Mwajiri }}</a></td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $kz->eneo }}</td>
                                <td><a href="/mawasiliano/{{$kz->id}}" class="btn bg-red-500">Omba</a></td>
                            </tr>
                        @endforeach


                        @else
                            <h3 class=" text-grey-900 font-semibold text-4xl mt-4 mb-10"> Hakuna taarifa ya kazi</h3>
                        @endif

                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>


    <div class="flex justify-center mt-10">
        {{$vibarua -> links()}}
    </div>




@endsection

@section('footer')
    @include('layouts.footer')
@endsection

