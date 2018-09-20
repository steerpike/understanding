<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Faker\Factory as Faker;
use App\Person;

class PeopleTest extends TestCase
{
    protected $faker;

    public function setUp()
    {
        parent::setUp();
        $this->faker = Faker::create();
    }
    public function tearDown()
    {
        parent::tearDown();
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPeopleClass()
    {
        $data = [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'wikipedia_canonical_url' => $this->faker->url,
        ];
        $person = new Person($data);
        $this->assertInstanceOf(Person::class, $person);
        $this->assertEquals($data['name'], $person->name);
        $this->assertEquals($data['description'], $person->description);
        $this->assertEquals($data['wikipedia_canonical_url'], $person->wikipedia_canonical_url);
    }
}
