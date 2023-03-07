@extends('Layouts.main')


@section('content')
    <!--Dodaj još filmova u popular i dodaj now playing-->
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="/movie">
                        <img src="/img/antman.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">Ant-Man</a>
                    </div>
                    <div class="flex item-center text-gray-400">
                        <span>star</span>
                        <span class="ml-1">85</span>
                        <span class="mx-2">|</span>
                        <span>May 5,2023</span>
                    </div>
                    <div class="text-gray-400">
                        Action, Comedy, Superhero
                    </div>
                </div>
                <div class="mt-8">
                    <a href="/movie">
                        <img src="/img/antman.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">Ant-Man</a>
                    </div>
                    <div class="flex item-center text-gray-400">
                        <span>star</span>
                        <span class="ml-1">85</span>
                        <span class="mx-2">|</span>
                        <span>May 5,2023</span>
                    </div>
                    <div class="text-gray-400">
                        Action, Comedy, Superhero
                    </div>
                </div>
                <div class="mt-8">
                    <a href="/movie">
                        <img src="/img/antman.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">Ant-Man</a>
                    </div>
                    <div class="flex item-center text-gray-400">
                        <span>star</span>
                        <span class="ml-1">85</span>
                        <span class="mx-2">|</span>
                        <span>May 5,2023</span>
                    </div>
                    <div class="text-gray-400">
                        Action, Comedy, Superhero
                    </div>
                </div>
                <div class="mt-8">
                    <a href="/movie">
                        <img src="/img/antman.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">Ant-Man</a>
                    </div>
                    <div class="flex item-center text-gray-400">
                        <span>star</span>
                        <span class="ml-1">85</span>
                        <span class="mx-2">|</span>
                        <span>May 5,2023</span>
                    </div>
                    <div class="text-gray-400">
                        Action, Comedy, Superhero
                    </div>
                </div>
                <div class="mt-8">
                    <a href="/movie">
                        <img src="/img/antman.jpeg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">Ant-Man</a>
                    </div>
                    <div class="flex item-center text-gray-400">
                        <span>star</span>
                        <span class="ml-1">85</span>
                        <span class="mx-2">|</span>
                        <span>May 5,2023</span>
                    </div>
                    <div class="text-gray-400">
                        Action, Comedy, Superhero
                    </div>
                </div>
                
               
            </div>
            
        </div>
    </div>
@endsection

