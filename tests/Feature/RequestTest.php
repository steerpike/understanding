<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Requests\Wikipedia;

class RequestTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testWikipediaClass()
    {
        $wikipedia = new Wikipedia();
        $this->assertInstanceOf(Wikipedia::class, $wikipedia);
        $wikipedia->getWhatLinksHere('Ludwig', 0);
    }

}
