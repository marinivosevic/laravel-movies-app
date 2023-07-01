@extends('Layouts.main')


@section('content')
    <!--Dodaj još filmova u popular i dodaj now playing-->
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    @foreach ($popularMovies as $popularMovie )
                    <div class="mt-8">
                        <a href="{{route('movies.show',$popularMovie['id'])}}">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $popularMovie['poster_path'] }}" alt="poster"
                                class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="{{route('movies.show',$popularMovie['id'])}}" class="text-lg mt-2 hover:text-gray-300">{{ $popularMovie['title'] }}</a>
                        </div>
                        <div class="flex item-center text-gray-400">
                            <span>star</span>
                            <span class="ml-1 text-orange-500">{{ $popularMovie['vote_average'] }}</span>
                            <span class="mx-2">|</span>
                            <span>{{ \Carbon\Carbon::parse($popularMovie['release_date'])->format('M d, Y') }}</span>
                        </div>
                        <div class="text-gray-400">
                            @foreach ($popularMovie['genre_ids'] as $genre)
                                {{ $genres->get($genre) }}
                                @if (!$loop->last)
                                
                                @endif
                            @endforeach
                        </div>
                    </div>
                    
                    @endforeach
               
                
               
            </div>
            
        </div>
    </div>
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($nowPlayingMovies as $movie)
                <div class="mt-8">
                    <a href="/movie">
                        <img src="{{  $movie['poster_path'] }}" alt="poster"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">{{ $movie['title'] }}</a>
                    </div>
                    <div class="flex item-center text-gray-400">
                        <span>star</span>
                        <span class="ml-1 text-orange-500">{{ $movie['vote_average']}}</span>
                        <span class="mx-2">|</span>
                        <span>{{ ($movie['release_date']) }}</span>
                    </div>
                    <div class="text-gray-400">
                        @foreach ($movie['genre_ids'] as $genre)
                            {{ $genres->get($genre) }}@if (!$loop->last)
                                
                            @endif
                        @endforeach
                    </div>
                </div>
                
            @endforeach
               
                
               
            </div>
            
        </div>
    </div>
@endsection

