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
    <script src="https://cdn.tailwindcss.com"></script>

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
                <li><a href="{{ url('/') }}">Nyumbani</a></li>
                <li><a href="{{ url('kazi') }}">Kazi</a></li>
                <li><a href="{{ url('mwajiri') }}">Mwajiri</a></li>
                <li><a href="{{ url('disclaimer') }}">Disclaimer</a></li>
                <li><a href="{{ url('register') }}">Jiunge</a></li>
                <li><a class="btn bg-red-600" href="{{ url('login') }}">Ingia</a></li>
            </ul>
        </div>
        <a class="btn btn-ghost normal-case text-xl">VibaruaChapChap</a>

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
            <li><a href="{{ url('register') }}">Jiunge</a></li>
            <li><a class="btn bg-red-600" href="{{ url('login') }}">Ingia</a></li>
        </ul>
    </div>

</div>


@yield('content')

@yield('grid')


{{--

<footer class="footer footer-center p-4 bg-base-300 text-base-content">
    <div>
        <p>Copyright © 2022 - All right reserved by ACME Industries Ltd</p>
    </div>
</footer>

--}}



<footer>
    @yield('footer')
</footer>


</body>

</body>
</html>
