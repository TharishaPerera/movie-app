@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/images/parasite.jpg" alt="parasite" class="w-full md:w-96 rounded-lg">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">Parasite (2022)</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
                    <svg width="12px" height="12px" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0005 0L21.4392 9.27275L32.0005 11.5439L24.8005 19.5459L25.889 30.2222L16.0005 25.895L6.11194 30.2222L7.20049 19.5459L0.000488281 11.5439L10.5618 9.27275L16.0005 0Z" fill="#FFCB45"/>
                    </svg>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>January 2023</span>
                    <span class="mx-2">|</span>
                    <span>Action, Thriller, Drama</span>
                </div>
                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, error, nesciunt! Consequuntur delectus dolore illo molestias odit quod quos repellendus sapiente sunt totam. A aperiam aut autem dicta dignissimos, dolorem eos est eveniet harum id inventore ipsa, ipsam libero mollitia nobis pariatur perferendis quo repellendus rerum sequi tempora veritatis, voluptatibus.
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4 gap-4">
                        <div>
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                        <div>
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                        <div>
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <button class="flex items-center bg-orange-500 text-gray-900 rounded-lg font-semibold px-5 py-3 hover:bg-orange-600 transition ease-in-out duration-150">
                        <svg fill="#000000" width="24px" height="24px" viewBox="0 0 24 24" id="play" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color"><polygon id="secondary" points="16 12 10 16 10 8 16 12" style="fill: none; stroke: rgb(0,0,0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></polygon><circle id="primary" cx="12" cy="12" r="9" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></circle></svg>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>
        </div>
    </div>  <!-- End movie info -->

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-10">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <img src="/images/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150 rounded-lg">
                    <div class="mt-2">
                        <span class="text-lg mt-2">Real Name</span>
                        <div class="flex items-center text-gray-400 text-sm">
                            <span>John Doe</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <img src="/images/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150 rounded-lg">
                    <div class="mt-2">
                        <span class="text-lg mt-2">Real Name</span>
                        <div class="flex items-center text-gray-400 text-sm">
                            <span>John Doe</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <img src="/images/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150 rounded-lg">
                    <div class="mt-2">
                        <span class="text-lg mt-2">Real Name</span>
                        <div class="flex items-center text-gray-400 text-sm">
                            <span>John Doe</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  <!-- Cast end -->

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-10">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="mt-8">
                    <img src="/images/image1.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150 rounded-lg">
                </div>
                <div class="mt-8">
                    <img src="/images/image2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150 rounded-lg">
                </div>
                <div class="mt-8">
                    <img src="/images/image3.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150 rounded-lg">
                </div>
                <div class="mt-8">
                    <img src="/images/image4.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150 rounded-lg">
                </div>
            </div>
        </div>
    </div>  <!-- Images end -->
@endsection
