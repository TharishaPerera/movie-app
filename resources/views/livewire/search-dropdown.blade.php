<div class="relative mt-3 md:mt-0" x-data="{ isOpen: true }" @click.away="isOpen = false" >
    <input
        wire:model.debounce.500ms="search"
        x-ref="search"
        @keydown.window="
            if(event.keyCode === 191) {
                event.preventDefault();
                $refs.search.focus();
            }
        "
        @focus="isOpen = true"
        @keydown.escape.window="isOpen = false"
        @keydown.shift.tab="isOpen = false"
        @keydown="isOpen = true"
        type="text"
        class="bg-gray-800 text-sm leading-6 rounded-full w-60 px-2 pl-7 py-1"
        placeholder="Search" />
    <div class="absolute top-0">
        <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24" fill="#a6a6a6" xmlns="http://www.w3.org/2000/svg">
            <circle cx="11" cy="11" r="7" stroke="#a6a6a6" stroke-width="2"/>
            <path d="M11 8C10.606 8 10.2159 8.0776 9.85195 8.22836C9.48797 8.37913 9.15726 8.6001 8.87868 8.87868C8.6001 9.15726 8.37913 9.48797 8.22836 9.85195C8.0776 10.2159 8 10.606 8 11" stroke="#33363F" stroke-width="2" stroke-linecap="round"/>
            <path d="M20 20L17 17" stroke="#a6a6a6" stroke-width="2" stroke-linecap="round"/>
        </svg>
    </div>

    <div wire:loading class="spinner top-0 right-0 mr-4 mt-4 "></div>

    @if(strlen($search) >= 2)
        <div
            class="z-50 absolute bg-gray-800 text-sm rounded-lg w-64 mt-4"
            x-show.transition.opacity="isOpen" >
            @if($searchResults->count() > 0)
                <ul>
                    @foreach($searchResults as $result)
                        <li class="border-b border-gray-700">
                            <a
                                href="{{ route('movies.show', $result['id']) }}"
                                class="block hover:bg-gray-700 px-1 py-1 flex items-center"
                                @if($loop->last) @keydown.tab="isOpen = false" @endif
                            >
                                @if($result['poster_path'])
                                    <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="Poster" class="w-8">
                                @else
                                    <img src="https://via.placeholder.com/50x75" alt="Poster" class="w-8">
                                @endif
                                <span class="ml-4">{{ $result['title'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="px-3 py-3">No results for "{{ $search }}"</div>
            @endif
        </div>
    @endif
</div>
