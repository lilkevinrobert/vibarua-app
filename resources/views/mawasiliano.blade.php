@extends('layouts.app2')
@section('title','Mawasiliano')

@section('content')

    {{--<div class="mx-4 h-96 container lg:mx-auto w-screen my-8">
        <div class="overflow-x-auto ">
            <table class="table w-full">
                <!-- head -->
                <thead>
                <tr >
                    <th class="text-center bg-red-500">Taarifa za mwajiri</th>

                </tr>
                </thead>
                <tbody>
                <!-- row 1 -->
                <tr class="hover text-center">
                    <th class="">1</th>
                    <td class="tracking-wide ">Mwajiri:</td>
                    <td>Quality Control Specialist</td>

                </tr>
                <!-- row 2 -->
                <tr class="hover text-center">
                    <th>2</th>
                    <td class="tracking-wide">Kazi</td>
                    <td>Desktop Support Technician</td>
                </tr>
                <!-- row 3 -->
                <tr class="hover text-center">
                    <th>3</th>
                    <td>Eneo</td>
                    <td>Tax Accountant</td>

                </tr>

                <tr class="hover text-center">
                    <th>4</th>
                    <td>Nambari Ya simu</td>
                    <td>Tax Accountant</td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>--}}


    <div class="p-4 mt-4">
        <h1 class="text-4xl text-center text-red-500 font-semibold mb-6">Wasiliana na Mwajiri</h1>
        <div class="container">
            <div class="flex flex-col md:grid grid-cols-12 text-grey-900">

                <div class="flex md:contents">
                    <div class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
                        <div class="h-full w-6 flex items-center justify-center">
                            <div class="h-full w-1 bg-red-500 pointer-events-none"></div>
                        </div>
                        <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-red-500 shadow text-center">
                            <i class="fas fa-check-circle text-white"></i>
                        </div>
                    </div>
                    <div class="bg-white col-start-4 col-end-12 p-4 rounded-xl my-2 mr-auto shadow-md w-full">
                        <h3 class="font-semibold text-lg mb-1 text-center">Jina la Mwajiri</h3>
                        <p class="leading-tight text-justify w-full">
                            {{$kibarua['Mwajiri']}}
                        </p>
                    </div>
                </div>

                <div class="flex md:contents">
                    <div class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
                        <div class="h-full w-6 flex items-center justify-center">
                            <div class="h-full w-1 bg-red-500 pointer-events-none"></div>
                        </div>
                        <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-red-500 shadow text-center">
                            <i class="fas fa-check-circle text-white"></i>
                        </div>
                    </div>
                    <div class="bg-white col-start-4 col-end-12 p-4 rounded-xl my-4 mr-auto shadow-md w-full">
                        <h3 class="font-semibold text-lg mb-1 text-center ">Eneo</h3>
                        <p class="leading-tight text-justify">
                            {{$kibarua['eneo']}}
                        </p>
                    </div>
                </div>




                <div class="flex md:contents">
                    <div class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
                        <div class="h-full w-6 flex items-center justify-center">
                            <div class="h-full w-1 bg-red-500 pointer-events-none"></div>
                        </div>
                        <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-red-500 shadow text-center">
                            <i class="fas fa-check-circle text-white"></i>
                        </div>
                    </div>
                    <div class="bg-white col-start-4 col-end-12 p-4 rounded-xl my-4 mr-auto shadow-md w-full">
                        <h3 class="font-semibold text-lg mb-1 text-center ">Eneo</h3>
                        <p class="leading-tight text-justify">
                            22 July 2021, 01:00 PM
                        </p>
                    </div>
                </div>






                <div class="flex md:contents">
                    <div class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
                        <div class="h-full w-6 flex items-center justify-center">
                            <div class="h-full w-1 bg-red-500 pointer-events-none"></div>
                        </div>
                        <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-red-500 shadow text-center">
                            <i class="fas fa-times-circle text-white"></i>
                        </div>
                    </div>
                    <div class="bg-red-500 col-start-4 col-end-12 p-4 rounded-xl my-4 mr-auto shadow-md w-full">
                        <h3 class="font-semibold text-lg mb-1 text-gray-50">Cancelled</h3>
                        <p class="leading-tight text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque blanditiis cupiditate deleniti dignissimos, dolores eaque exercitationem expedita ipsam minima molestias natus, nemo neque omnis, quas quisquam repellat tempore. In, perspiciatis!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi aspernatur at, cum est expedita fuga hic minus numquam possimus quas quis sunt, vel? Nulla, optio, vero. Assumenda ea, eos.
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>



@endsection


@section('footer')
    @include('layouts.footer')
@endsection

