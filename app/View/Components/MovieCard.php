<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MovieCard extends Component
{
    /**
     * Create a new component instance.
     */

   
   
    public function __construct(
         public  $movie
    )
    {
        
        $this->movie = $movie;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.movie-card');
    }
}
