@extends('Layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{ $movie['poster_path'] }}" alt="antman"
                    style="width: 24rem">
            </div>

            <div class="md:ml-24">
                <h2 class="text-4xl mt-4 md:mt-0 font-semibold">{{ $movie['title'] }}</h2>
                <div class="flex flex-wrap item-center text-gray-400">
                    <span>star</span>
                    <span class="ml-1 text-orange-500">{{ $movie['vote_average']  }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ ($movie['release_date']) }}</span>
                    <span class="mx-2">|</span>
                    <div class="text-gray-400">
                         <span>{{$movie['genres']}}</span>
                    </div>
                </div>
                <p class="text-gray-300 mt-8">
                    {{ $movie['overview'] }}
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">
                        Fetured Cast
                    </h4>
                    <div class="flex mt-4">
                        @foreach ($movie['crew'] as $crew)
                            
                                <div class="mr-8">
                                    <div>{{ $crew['name'] }}</div>
                                    <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                                </div>
                            
                            
                        @endforeach


                    </div>
                </div>
                <div x-data = "{isOpen:false}">
                    @if (count($movie['videos']['results']) > 0)
                        <div class="mt-12">
                            <button 
                                @click = "isOpen = true"
                                href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}"
                                class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                                <svg class="w-6 fill-current" viewBox="0 0 24 24">
                                    <path d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" />
                                </svg>
                                <span class="ml-2">Play Trailer</span>
                            </button>
                        </div>

                        <div style="background-color: rgba(0, 0, 0, .5);"
                            class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto" x-show.transition.opacity = "isOpen">
                            <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                                <div class="bg-gray-900 rounded">
                                    <div class="flex justify-end pr-4 pt-2">
                                        <button @click="isOpen = false" @keydown.escape.window="isOpen = false"
                                            class="text-3xl leading-none hover:text-gray-300">&times;
                                        </button>
                                    </div>
                                    <div class="modal-body px-8 py-8">
                                       
                                          <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                                        <iframe class="responsive-iframe absolute top-0 left-0 w-full h-full"
                                            src="https://www.youtube.com/embed/{{ $movie['videos']['results'][0]['key'] }}"
                                            style="border:0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                @endif

            </div>
        </div>
    </div>
    </div>

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($movie['cast'] as $cast)
                   
                        <div class="mt-8">
                            <a href="/movie">
                                <img src="{{ 'https://image.tmdb.org/t/p/w300/' . $cast['profile_path'] }}" alt="parasite"
                                    class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="" class="text-lg mt-2 hover:text-gray-300">{{ $cast['name'] }}</a>
                            </div>

                            <div class="text-gray-400">
                                {{ $cast['character'] }}
                            </div>
                        </div>
                        
                @endforeach
            </div>
        </div>
    </div>

    <div class="movie-images" x-data = "{isOpen: false,image: ''}">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  gap-8">
                @foreach ($movie['images'] as $image)
                    
                        <div class="mt-8">
                            <a 
                                href="#" 
                                @click.prevent = 
                                "
                                isOpen = true 
                                image='{{ 'https://image.tmdb.org/t/p/original/'.$image['file_path'] }}'
                                " 
                                
                                >
                                <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $image['file_path'] }}" alt="image"
                                    class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>

                        </div>
                    
                @endforeach
                <div
                style="background-color: rgba(0, 0, 0, .5);"
                class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                x-show="isOpen"
            >
                <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                    <div class="bg-gray-900 rounded">
                        <div class="flex justify-end pr-4 pt-2">
                            <button
                                @click="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class="text-3xl leading-none hover:text-gray-300">&times;
                            </button>
                        </div>
                        <div class="modal-body px-8 py-8">
                            <img :src="image" alt="poster">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
