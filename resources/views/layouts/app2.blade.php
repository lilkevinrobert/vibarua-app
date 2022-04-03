<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Vibarua ChapChap</title>
    <!-- Materialize CSS CDN -->

    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.13.4/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .urefu{
            height: 480px;
        }

        .pane-1{
            background-color: #282828;
        }

        .pane-2{
            background-color: #f24221;
        }
    </style>

</head>
<body>


<body data-theme="light">

<div class="navbar bg-base-100 h-20 container h-20">
    <div class="navbar-start ">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="{{ url('/') }} " >Nyumbani</a></li>
                <li><a href="{{ url('kazi') }}">Kazi</a></li>
                <li><a href="{{ url('mwajiri') }}">Mwajiri</a></li>
                <li><a href="{{ url('disclaimer') }}">Disclaimer</a></li>

                @guest
                    @if(Route::has('login'))
                        <li>
                            <a href="{{ url('register') }}">{{ __('Jiunge') }}</a>
                        </li>
                    @endif

                    @if(Route::has('register'))
                        <li>
                            <a class="btn bg-red-600" href="{{ url('login') }}">{{ __('Ingia') }}</a>
                        </li>
                    @endif
                @endguest


                @auth

                <li class="dropdown">
                        <label tabindex="0" class="btn m-1 bg-red-500">{{ Auth::user()->name }}</label>
                        <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{__('Ondoka')}}</a></li>
                        </ul>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                        @csrf
                    </form>
                </li>

                @endauth


            </ul>
        </div>
        <a class="btn btn-ghost text-red-600 normal-case text-xl" href="{{ url('/') }}">VibaruaChapChap</a>

{{--        <a href="https://flowbite.com" class="flex items-center">
            <img src="/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
        </a>--}}

    </div>
    <div class="navbar-end hidden lg:flex">
        <ul class="menu menu-horizontal p-0">
            <li><a href="{{ url('/') }}">Nyumbani</a></li>
            <li><a href="{{ url('kazi') }}">Kazi</a></li>
            <li><a href="{{ url('mwajiri') }}">Mwajiri</a></li>
            <li><a href="{{ url('disclaimer') }}">Disclaimer</a></li>
            @guest
                @if(Route::has('login'))
                    <li>
                        <a href="{{ url('register') }}">{{ __('Jiunge') }}</a>
                    </li>
                @endif

                @if(Route::has('register'))
                    <li>
                        <a class="btn bg-red-600" href="{{ url('login') }}">{{ __('Ingia') }}</a>
                    </li>
                @endif
            @endguest


            @auth

                <li class="dropdown ">
                    <label tabindex="0" class="btn m-1 bg-red-500 text-white">{{ Auth::user()->name }}</label>
                    <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{__('Ondoka')}}</a></li>
                    </ul>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                        @csrf
                    </form>
                </li>



            @endauth


{{--
            <li><a href="{{ url('register') }}">Jiunge</a></li>
            <li><a class="btn bg-red-600" href="{{ url('login') }}">Ingia</a></li>--}}
        </ul>
    </div>

</div>


@yield('content')


<footer>
    @yield('footer')
</footer>


</body>

</body>
</html>
