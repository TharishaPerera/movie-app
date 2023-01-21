<?php

namespace App\Http\Controllers;

use App\ViewModels\MoviesViewModel;
use App\ViewModels\MovieViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baseURL = config('services.tmdb.baseUrl');
        $apiKey = "?api_key=" . config('services.tmdb.token');

        $popularMovies = Http::get($baseURL . '/movie/popular' . $apiKey)
            ->json()['results'];

        $nowPlayingMovies = Http::get($baseURL . '/movie/now_playing' . $apiKey)
            ->json()['results'];

        $genreArray = Http::get($baseURL . '/genre/movie/list' . $apiKey)
            ->json()['genres'];
//        $genreArray = collect($genreArray)->mapWithKeys(function ($genre){
//            return [$genre['id'] => $genre['name']];
//        });

//        return view('index', [
//            'popularMovies' => $popularMovies,
//            'nowPlayingMovies' => $nowPlayingMovies,
//            'genres' => $genreArray,
//        ]);

        $viewModel = new MoviesViewModel(
            $popularMovies,
            $nowPlayingMovies,
            $genreArray,
        );

        return view('index', $viewModel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $baseURL = config('services.tmdb.baseUrl');
        $apiKey = "?api_key=" . config('services.tmdb.token');
        $appends = 'credits,videos,images';

        $movie = Http::get($baseURL . '/movie/' . $id . $apiKey . '&append_to_response=' . $appends)
            ->json();

        $genreArray = Http::get($baseURL . '/genre/movie/list' . $apiKey)
            ->json()['genres'];
        $genreArray = collect($genreArray)->mapWithKeys(function ($genre){
            return [$genre['id'] => $genre['name']];
        });

        $viewModel = new MovieViewModel($movie);

        return view('show', $viewModel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
