<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForecastTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testSaveForecast()
    {
        $userData = [
                    "name"=> "Clouds",
                    "description"=> "overcast clouds",
                    "icon"=> "http://openweathermap.org/img/w/04n.png",
                    "degree"=> 195,
                    "speed"=> 4.24,
                    "tempeture"=> 265.13,
                    "Feel_like"=> 258.8,
                    "time"=> "09=>00 pm"
        ];


        $this->json('POST', 'forecast', $userData, ['Accept' => 'application/json'])
            ->assertStatus(201)
            ->assertJsonStructure([
                "access_token",
                "message"
            ]);
    }
}
