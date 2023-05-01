<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;



class SearchDropdown extends Component
{
    public $search = '';
    public function render()
    {
        $searchResoults = [];

        if(strlen($this->search) >= 2){
            $searchResoults = Http::get('https://api.themoviedb.org/3/search/movie?query='.$this->search.'&api_key=127273cacb36beb46e5c3162f6e04643')
        ->json()['results'];
        }

        
        return view('livewire.search-dropdown',[
            'searchResoults' => collect($searchResoults)->take(7),
        ]);
    }
}
