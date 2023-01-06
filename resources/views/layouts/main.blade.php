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
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-2">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="#">
                        <img src="/images/logo.png" width="150px" alt="Logo">
                    </a>
                </li>
                <li class="md:ml-6 md:mt-1.5 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-400 align-middle">Movies</a>
                </li>
                <li class="md:ml-6 md:mt-1.5 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-400 align-middle">TV Shows</a>
                </li>
                <li class="md:ml-6 md:mt-1.5 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-400 align-middle">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative mt-3 md:mt-0">
                    <input type="text" class="bg-gray-800 text-sm leading-6 rounded-full w-60 px-2 pl-7 py-1" placeholder="Search" />
                    <div class="absolute top-0">
                        <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24" fill="#a6a6a6" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11" cy="11" r="7" stroke="#a6a6a6" stroke-width="2"/>
                            <path d="M11 8C10.606 8 10.2159 8.0776 9.85195 8.22836C9.48797 8.37913 9.15726 8.6001 8.87868 8.87868C8.6001 9.15726 8.37913 9.48797 8.22836 9.85195C8.0776 10.2159 8 10.606 8 11" stroke="#33363F" stroke-width="2" stroke-linecap="round"/>
                            <path d="M20 20L17 17" stroke="#a6a6a6" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/images/actor3.jpg" alt="profile" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>
