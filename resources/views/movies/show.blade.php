@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-16 py-16 flex flex-col md:flex-row">
            <img src="{{ $movie['poster_path'] }}" alt="poster"
                 class="w-full md:w-96 rounded-lg">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $movie["title"] }}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
                    <svg width="12px" height="12px" viewBox="0 -0.5 32 32" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.0005 0L21.4392 9.27275L32.0005 11.5439L24.8005 19.5459L25.889 30.2222L16.0005 25.895L6.11194 30.2222L7.20049 19.5459L0.000488281 11.5439L10.5618 9.27275L16.0005 0Z"
                            fill="#FFCB45"/>
                    </svg>
                    <span class="ml-1">{{ $movie['vote_average'] }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ $movie['release_date'] }}</span>
                    <span class="mx-2">|</span>
                    <span>
                        {{ $movie['genres'] }}
                    </span>
                </div>
                <p class="text-gray-300 mt-8">
                    {{ $movie['overview'] }}
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4 gap-8">
                        @foreach($movie['crew'] as $crew)
                            <div>
                                <div>{{ $crew['name'] }}</div>
                                <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div x-data="{ isOpen: false}">
                    @if(count($movie['videos']['results']) > 0)
                        <div class="mt-12">
                            <button
                                @click="isOpen = true"
                                class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded-lg font-semibold px-5 py-3 hover:bg-orange-600 transition ease-in-out duration-150"
                            >
                                <svg fill="#000000" width="24px" height="24px" viewBox="0 0 24 24" id="play"
                                     data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color">
                                    <polygon id="secondary" points="16 12 10 16 10 8 16 12"
                                             style="fill: none; stroke: rgb(0,0,0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></polygon>
                                    <circle id="primary" cx="12" cy="12" r="9"
                                            style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></circle>
                                </svg>
                                <span class="ml-2">Play Trailer</span>
                            </button>
                        </div>
                    @endif

                    <!-- Play trailer modal -->
                    <div
                        style="background-color: rgba(0,0,0,.5);"
                        class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                        x-show.transition.opacity="isOpen"
                    >
                        <div class="container mx-auto lg:px-48 rounded-lg overflow-y-auto">
                            <div class="bg-gray-900 rounded">
                                <div class="flex justify-end pr-2 pt-2">
                                    <button @click="isOpen = false" class="text-3xl leading-none hover:text-gray-300">
                                        &times;
                                    </button>
                                </div>
                                <div class="modal-body px-2 py-2">
                                    <div class="responsive-container overflow-hidden relative"
                                         style="padding-top: 56.25%;">
                                        <iframe width="560" height="315"
                                                class="resposive-iframe absolute top-0 left-0 w-full h-full"
                                                @if($movie['videos']['results'])
                                                    src="https://www.youtube.com/embed/{{ $movie['videos']['results'][0]['key'] }}"
                                                @endif
                                                style="border: 0;"
                                                allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  <!-- End movie info -->

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-16 py-10">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
                @foreach($movie['cast'] as $cast)
                    <div class="mt-8">
                        <a href="{{ route('actors.show', $cast['id']) }}">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500' . $cast['profile_path'] }}" alt="image"
                                class="hover:opacity-75 transition ease-in-out duration-150 rounded-lg">
                        </a>
                        <div class="mt-2">
                            <a href="{{ route('actors.show', $cast['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{ $cast['name'] }}</a>
                            <div class="flex items-center text-gray-400 text-sm">
                                <span>{{ $cast['character'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>  <!-- Cast end -->

    <div class="movie-images" x-data="{ isOpen: false, image: '' }">
        <div class="container mx-auto px-16 py-10">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($movie['images'] as $image)
                    <div class="mt-8">
                        <a
                            @click.prevent="
                                isOpen = true,
                                image = '{{ 'https://image.tmdb.org/t/p/original' . $image['file_path'] }}'
                            "
                            href="">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500' . $image['file_path'] }}" alt="image"
                                 class="hover:opacity-75 transition ease-in-out duration-150 rounded-lg">
                        </a>
                    </div>
                @endforeach
                <!-- Image View Modal -->
                <div
                    style="background-color: rgba(0,0,0,.5);"
                    class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                    x-show.transition.opacity="isOpen"
                >
                    <div class="container mx-auto lg:px-48 rounded-lg overflow-y-auto">
                        <div class="bg-gray-900 rounded">
                            <div class="flex justify-end pr-2 pt-2">
                                <button
                                    @click="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="text-3xl leading-none hover:text-gray-300">
                                    &times;
                                </button>
                            </div>
                            <div class="modal-body px-2 py-2">
                                <img :src="image" alt="Poster">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  <!-- Images end -->
@endsection
