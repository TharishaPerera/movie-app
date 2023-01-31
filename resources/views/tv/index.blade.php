@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-16 pt-10">
        <!-- Popular -->
        <div class="popular-tv">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Popular TV Shows
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularTv as $tvShow)
                    <x-tv-card :tvShow="$tvShow" :genres="$genres" />
                @endforeach
            </div>
        </div>

        <!-- Now Playing -->
        <div class="now-playing-movies py-10">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Top Rated TV Shows
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($topRatedTv as $tvShow)
                    <x-tv-card :tvShow="$tvShow" />
                @endforeach
            </div>
        </div>
    </div>
@endsection
