<?php

namespace Tests\TestCase;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true()
    {
        Http::fake();
        
        $response = $this->get(route('movies.index'));

       
        $response->assertSee('Popular Movies');
    }
}

