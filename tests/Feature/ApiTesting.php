<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTesting extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_kendaraan()
    {
        $response = $this->get('api/kendaraan');

        $response->assertStatus(200);
    }

    public function test_get_mobil()
    {
        $response = $this->get('api/mobil');

        $response->assertStatus(200);
    }
}
