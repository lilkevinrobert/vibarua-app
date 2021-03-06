@extends('layouts.app2')
@section('title','Kazi')

@section('content')

    <h3 class="text-center text-red-600 font-semibold text-4xl">Tafuta nasi Kazi ya ndoto yako</h3>

    <div class=" mt-10 container mx-auto w-1/2 ">
        <form action="{{ route('web.search') }}" method="get" >
            <input type="text" id="name" name="query" placeholder="Tafuta kazi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
        </form>
    </div>

    <div class="flex flex-col container mx-auto">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
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
                        @foreach($kazi as $kz)
                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-md font-semibold text-gray-900">{{ $kz->kazi }}</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><a href="#">{{ $kz->Mwajiri }}</a></td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $kz->eneo }}</td>
                                <td><a href="/mawasiliano/{{$kz->id}}" class="btn bg-red-500">Omba</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="flex justify-center mt-10">
        {{$kazi -> links()}}
    </div>




@endsection


@section('footer')
    @include('layouts.footer')
@endsection
