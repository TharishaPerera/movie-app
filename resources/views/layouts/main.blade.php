<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T-Movies</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/app.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/images/favicon.png">

    <!-- Live Wire Styles -->
    <livewire:styles />
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-16 py-2">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ route('movies.index') }}">
                        <img src="/images/logo.png" width="150px" alt="Logo">
                    </a>
                </li>
                <li class="md:ml-6 md:mt-1.5 mt-3 md:mt-0">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-400 align-middle transition ease-in-out duration-150">Movies</a>
                </li>
                <li class="md:ml-6 md:mt-1.5 mt-3 md:mt-0">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-400 align-middle transition ease-in-out duration-150">TV Shows</a>
                </li>
                <li class="md:ml-6 md:mt-1.5 mt-3 md:mt-0">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-400 align-middle transition ease-in-out duration-150">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <livewire:search-dropdown />
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/images/actor3.jpg" alt="profile" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')

    <!-- Live Wire Scripts-->
    <livewire:scripts />
</body>
</html>
