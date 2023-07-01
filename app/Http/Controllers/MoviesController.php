<?php

namespace App\Http\Controllers;

use App\ViewModels\HomepageViewModel;
use App\ViewModels\MoviesViewModel;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $popularMovies = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=127273cacb36beb46e5c3162f6e04643')
        ->json()['results'];
        
        $genres = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=127273cacb36beb46e5c3162f6e04643')
        ->json()['genres'];
        
        $nowPlayingMovies = Http::get('https://api.themoviedb.org/3/movie/now_playing?api_key=127273cacb36beb46e5c3162f6e04643')
        ->json()['results'];
        
         /* $genres = collect($genresArray)->mapWithKeys(function ($genre){
            return [$genre['id'] => $genre['name']];
        }); */
        
        

        /* return view('index',[
            'popularMovies' => $popularMovies,
            'genres' => $genres,
            'nowPlayingMovies'=> $nowPlayingMovies,
        ]); */

        $viewModel = new HomepageViewModel(
            $popularMovies,
            $nowPlayingMovies,
            $genres,
        );
        
        return view('index',$viewModel);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $movie = Http::get('https://api.themoviedb.org/3/movie/'.$id.'?api_key=127273cacb36beb46e5c3162f6e04643&append_to_response=credits,videos,images')
        ->json();
        
        $viewModel = new MoviesViewModel($movie);
        
        return view('show',$viewModel);

        

        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
