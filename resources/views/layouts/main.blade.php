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
        <div class="container mx-auto flex items-center justify-between px-4 py-2">
            <ul class="flex item-center">
                <li>
                    <a href="#">
                        <img src="/images/logo.png" width="150px" alt="Logo">
                    </a>
                </li>
                <li class="ml-6 mt-1.5">
                    <a href="#" class="hover:text-gray-300 align-middle">Movies</a>
                </li>
                <li class="ml-6 mt-1.5">
                    <a href="#" class="hover:text-gray-300 align-middle">TV Shows</a>
                </li>
                <li class="ml-6 mt-1.5">
                    <a href="#" class="hover:text-gray-300 align-middle">Actors</a>
                </li>
            </ul>
            <div class="flex item-center">
                <div class="relative">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-2 pl-8 py-1" placeholder="Search" />
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>
