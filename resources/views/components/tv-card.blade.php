<div class="mt-8">
    <a href="{{ route('tv.show', $tvShow['id']) }}">
        <img src="{{ $tvShow['poster_path'] }}" alt="poster"
             class="hover:opacity-75 transition ease-in-out duration-150 rounded-lg">
    </a>
    <div class="mt-2">
        <a href="{{ route('tv.show', $tvShow['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{ $tvShow["name"] }}</a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
            <svg width="12px" height="12px" viewBox="0 -0.5 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16.0005 0L21.4392 9.27275L32.0005 11.5439L24.8005 19.5459L25.889 30.2222L16.0005 25.895L6.11194 30.2222L7.20049 19.5459L0.000488281 11.5439L10.5618 9.27275L16.0005 0Z"
                    fill="#FFCB45"/>
            </svg>
            <span class="ml-1">{{ $tvShow['vote_average'] }}</span>
            <span class="mx-2">|</span>
            <span>{{ $tvShow['first_air_date'] }}</span>
        </div>
        <div class="text-gray-400 text-sm">{{ $tvShow['genres'] }}</div>
    </div>
</div>


