@extends('layouts.app2')
@section('title','Nyumbani')


@section('content')

<div class="flex justify-center urefu w-full bg-red-100">
    <div class="pane-1 h-full w-1/2 flex items-center justify-center">
        <div class="flex">
            <div class="text-center">
                <h1 class="text-white md:text-4xl mb-2 font-bold">NATAFUTA WAFANYAKAZI</h1>
                <p class="font-semibold text-white">Kuna kazi zaidi ya 1,000 zinatafuta wachapakazi kila siku. Fungua akaunti yako leo uanze kufurahia kazi hizi kirahisi.</p>
                <a href="{{ url('mwajiri') }}"><button type="button" class="font-medium tracking-wide mt-10 text-white bg-red-700 hover:bg-red-800 focus:ring-4  focus:outline-none focus:ring-red-500 font-medium rounded-lg text-l px-8 py-2.5 text-center mr-3 md:mr-0 ">NATAFUTA WAFANYAKAZI</button></a>
            </div>
        </div>
    </div>

    <div class="pane-2 h-full w-1/2 flex items-center justify-center">
        <div class="flex">
            <div class="text-center">
                <h1 class="text-white md:text-4xl mb-2 font-bold">NATAFUTA KAZI</h1>
                <p class="font-semibold text-white">Kuna kazi zaidi ya 1,000 zinatafuta wachapakazi kila siku. Fungua akaunti yako leo uanze kufurahia kazi hizi kirahisi.</p>
                <a href="{{ url('kazi') }}"><button type="button" class="font-medium tracking-wide mt-10 text-white bg-red-700 hover:bg-red-800 focus:ring-4  focus:outline-none focus:ring-red-500 rounded-lg text-l px-8 py-2.5 text-center mr-3 md:mr-0 ">NATAFUTA KAZI</button>
                </a>
            </div>
        </div>
    </div>
</div>



    <h3 class="text-center text-red-600 font-semibold text-4xl mt-20">Tafuta nasi Kazi ya ndoto yako</h3>

   {{-- <div class="flex flex-col  ">
    <div class="overflow-x-auto sm:-mx-6 container mt-8 ">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-white border-b">
                    <tr>
                        <th scope="col" class="text-xl font-bold text-red-500 px-6 py-4 text-left">
                            Kazi
                        </th>
                        <th scope="col" class="text-xl font-bold text-red-500 px-6 py-4 text-left">
                            Mwajiri
                        </th>
                        <th scope="col" class="text-xl font-bold text-red-500 px-6 py-4 text-left">
                            Eneo
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($kazi as $kz)
                                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-grey-500">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $kz->kazi }}</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><a href="#">{{ $kz->Mwajiri }}</a></td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $kz->eneo }}</td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>--}}


<div class=" mt-10 container mx-auto w-1/2 ">
    <form action="{{ route('web.search') }}" method="get" >
        <input type="text" id="name" name="query" placeholder="Tafuta kazi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
    </form>
</div>


{{--<div class="flex flex-col container mx-auto ">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-white border-b">
                    <tr>
                        <th scope="col" class="text-xl font-bold text-red-500 px-6 py-4 text-left">
                            Kazi
                        </th>
                        <th scope="col" class="text-xl font-bold text-red-500 px-6 py-4 text-left">
                            Mwajiri
                        </th>
                        <th scope="col" class="text-xl font-bold text-red-500 px-6 py-4 text-left">
                            Eneo
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">

                        </th>
                    </tr>
                    </thead>
                    <tbody>


                    <tbody>
                    @foreach($kazi as $kz)
                        <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-grey-500">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $kz->kazi }}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><a href="#">{{ $kz->Mwajiri }}</a></td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $kz->eneo }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>--}}
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
                            <td class="px-6 py-4 whitespace-nowrap text-md font-semibold hover:font-bold text-gray-900">{{ $kz->kazi }}</td>
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




<h1 class="text-center text-red-600 font-bold pt-10 pb-3 text-4xl pb-10 mt-4">Aina ya Kazi Maarufu zipatikanazo</h1>


{{--
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
            <a href="/tafuta?query=kilimo">
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
--}}

<div class="container my-12 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">

        <!-- Column Kilimo-->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="/tafuta?query=kilimo">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{asset('assets/images/Kilimo.jpg')}}">
                </a>

                <footer class=" leading-none  p-1">
                    <h5 class="text-center text-l tracking-wide font-bold text-red-600">Kilimo</h5>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column Kinyozi-->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="/tafuta?query=kiwandani">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{asset('assets/images/kiwandani1.jpeg')}}">
                </a>

                <footer class=" leading-none  p-1">

                    <h5 class="text-center text-l tracking-wide font-bold text-red-600">Viwandani</h5>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column Ususi-->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="/tafuta?query=msusi">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{asset('assets/images/msusi.jpeg')}}">
                </a>

                <footer class=" leading-none  p-1">

                    <h5 class="text-center text-l tracking-wide font-bold text-red-600">Ususi</h5>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column Udereva-->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="/tafuta?query=dereva">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{asset('assets/images/udereva.jpeg')}}">
                </a>

                <footer class=" leading-none  p-1">

                    <h5 class="text-center text-l tracking-wide font-bold text-red-600">Udereva</h5>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column Dukani-->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="/tafuta?query=dukani">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{asset('assets/images/dukani.jpeg')}}">
                </a>

                <footer class=" leading-none  p-1">

                    <h5 class="text-center text-l tracking-wide font-bold text-red-600">Dukani</h5>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column Ufundi-->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="/tafuta?query=ufundi">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{asset('assets/images/ufundi.jpeg')}}">
                </a>

                <footer class=" leading-none  p-1">

                    <h5 class="text-center text-l tracking-wide font-bold text-red-600">Ufundi</h5>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column Ufugaji-->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="/tafuta?query=ufugaji">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{asset('assets/images/ufugaji.jpeg')}}">
                </a>

                <footer class=" leading-none  p-1">

                    <h5 class="text-center text-l tracking-wide font-bold text-red-600">Ufugaji</h5>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column Hotelini & Migahawani-->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="/tafuta?query=hotelini">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{asset('assets/images/bar.jpg')}}">
                </a>

                <footer class=" leading-none  p-1">

                    <h5 class="text-center text-l tracking-wide font-bold text-red-600">Hotelini & Migahawani</h5>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column Ofisini-->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="/tafuta?query=ofisini">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{asset('assets/images/ofisini.jpeg')}}">
                </a>

                <footer class=" leading-none  p-1">

                    <h5 class="text-center text-l tracking-wide font-bold text-red-600">Ofisini</h5>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->






        <!-- Column Hotelini & Migahawani-->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="/tafuta?query=hotelini">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{asset('assets/images/bar.jpg')}}">
                </a>

                <footer class=" leading-none  p-1">

                    <h5 class="text-center text-l tracking-wide font-bold text-red-600">Hotelini & Migahawani</h5>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column Ofisini-->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="/tafuta?query=ofisini">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{asset('assets/images/ofisini.jpeg')}}">
                </a>

                <footer class=" leading-none  p-1">

                    <h5 class="text-center text-l tracking-wide font-bold text-red-600">Ofisini</h5>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column Ofisini-->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="/tafuta?query=ofisini">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{asset('assets/images/ofisini.jpeg')}}">
                </a>

                <footer class=" leading-none  p-1">

                    <h5 class="text-center text-l tracking-wide font-bold text-red-600">Ofisini</h5>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        {{--changes--}}
        <!-- Column kinyozi-->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="/tafuta?query=kinyozi">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{asset('assets/images/kinyozii.jpeg')}}">
                </a>

                <footer class=" leading-none  p-1">

                    <h5 class="text-center text-l tracking-wide font-bold text-red-600">Kinyozi</h5>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column ujenzi-->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="/tafuta?query=ujenzi">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{asset('assets/images/ujenzi.jpeg')}}">
                </a>

                <footer class=" leading-none  p-1">

                    <h5 class="text-center text-l tracking-wide font-bold text-red-600">Ujenzi</h5>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- Column Usafi-->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="/tafuta?query=usafi">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{asset('assets/images/usafi.jpeg')}}">
                </a>

                <footer class=" leading-none  p-1">

                    <h5 class="text-center text-l tracking-wide font-bold text-red-600">Usafi</h5>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

    </div>
</div>




@endsection


@section('footer')
    @include('layouts.footer')
@endsection
