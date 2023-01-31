<?php

namespace App\Http\Controllers;

use App\ViewModels\TvShowViewModel;
use App\ViewModels\TvViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
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

        $popularTv = Http::get($baseURL . '/tv/popular' . $apiKey)
            ->json()['results'];

        $topRatedTv = Http::get($baseURL . '/tv/top_rated' . $apiKey)
            ->json()['results'];

        $genreArray = Http::get($baseURL . '/genre/tv/list' . $apiKey)
            ->json()['genres'];

        $viewModel = new TvViewModel(
            $popularTv,
            $topRatedTv,
            $genreArray,
        );

        return view('tv.index', $viewModel);
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

        $tvShow = Http::get($baseURL . '/tv/' . $id . $apiKey . '&append_to_response=' . $appends)
            ->json();

        $viewModel = new TvShowViewModel($tvShow);
        return view('tv.show', $viewModel);
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
