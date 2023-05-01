<div 
    class="relative mt-3 md:md-0"  x-data="{ isOpen: true }" 
    @click.away="isOpen = false"
    
    >
    <input type="text" wire:model.debouce.500ms= "search" class="bg-gray-700 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none 
        foucus:shadow-outline"
        placeholder="Search for anything..."
        @focus = "isOpen = true"
        @keydown.escape.window = "isOpen = false"
        @keydown.shift.tab = "isOpen = false"
          
        >
    <div class="absolute top-0">
        <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" style="color: white" xmlns="http://www.w3.org/2000/svg"
            width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 
                1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
                fill="white"></path>
        </svg>
    </div>

    <div wire:loading class="spinner top-0 right-0 mr-4 mt-4" ></div>

    @if (strlen($search) >= 2)
        
    
        <div class="z-50 absolute bg-gray-800 text-sm rounded w-64 mt-4 "
            x-show = "isOpen"
            
            
        >
            @if($searchResoults->count() > 0)
                <ul>
                    @foreach ($searchResoults as $Result)
                    <li class="border-b border-gray-700">
                        <a
                            href="{{route('movies.show',$Result['id'])}}" class="block hover:bg-gray-700 px-3 py-3 flex items-center"
                            @if($loop->last) @keydown.tab.exact = "isOpen = false" @endif
                            >
                            <img src = "https://image.tmdb.org/t/p/w92/{{$Result['poster_path']}}" alt="poster" class="w-8"/>
                            <span class = 'ml-4''>{{$Result['title']}}</span>
                        </a>
                    </li>
                    @endforeach

                
                </ul>
            @else
                <div class="px-3 py-3">No results for "{{$search}}"</div>
            @endif
        </div>
    @endif
</div>
