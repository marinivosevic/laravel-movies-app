<div class="mt-8">
    <a href="/movie">
        <img src="{{ $movie['poster_path'] }}" alt="poster"
            class="hover:opacity-75 transition ease-in-out duration-150">
    </a>
    <div class="mt-2">
        <a href="" class="text-lg mt-2 hover:text-gray-300">{{ $movie['title'] }}</a>
    </div>
    <div class="flex item-center text-gray-400">
        <span>star</span>
        <span class="ml-1 text-orange-500">{{ $movie['vote_average'] }}%</span>
        <span class="mx-2">|</span>
        <span>{{ ($movie['release_date']) }}</span>
    </div>
    <div class="text-gray-400">{{$movie['genres']}}</div>
</div>
