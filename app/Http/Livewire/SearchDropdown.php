<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;


class SearchDropdown extends Component
{
    public $search = '';

    public function render()
    {
        $searchResults = [];
        $baseURL = config('services.tmdb.baseUrl');
        $apiKey = "?api_key=" . config('services.tmdb.token');

        if (strlen($this->search) >= 2) {
            $searchResults = Http::get($baseURL . '/search/movie' . $apiKey . '&query=' . $this->search)
                ->json()['results'];
        }

        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(10),
            ''
        ]);
    }
}
