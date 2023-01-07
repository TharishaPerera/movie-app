<div class="mt-8">
    <a href="{{ route('movies.show', $movie['id']) }}">
        <img src="{{ 'https://image.tmdb.org/t/p/w500' . $movie['poster_path']}}" alt="parasite"
             class="hover:opacity-75 transition ease-in-out duration-150 rounded-lg">
    </a>
    <div class="mt-2">
        <a href="{{ route('movies.show', $movie['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{ $movie["title"] }}</a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
            <svg width="12px" height="12px" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.0005 0L21.4392 9.27275L32.0005 11.5439L24.8005 19.5459L25.889 30.2222L16.0005 25.895L6.11194 30.2222L7.20049 19.5459L0.000488281 11.5439L10.5618 9.27275L16.0005 0Z"
                    fill="#FFCB45"/>
            </svg>
            <span class="ml-1">{{ $movie['vote_average'] * 10 . "%" }}</span>
            <span class="mx-2">|</span>
            <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
        </div>
        <div class="text-gray-400 text-sm">
            @foreach($movie['genre_ids'] as $genre)
                {{ $genres->get($genre) }}@if(!$loop->last)
                    ,
                @endif
            @endforeach
        </div>
    </div>
</div>


