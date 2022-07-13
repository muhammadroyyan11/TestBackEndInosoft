<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Config;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_get_kendaraan()
    {
        $user = User::factory()->count(1)->create()->first();

        $this->actingAs($user, 'api/auth/login');

        $response = $this->get('api/v1/kendaraan');

        $response->assertStatus(200);
    }
}
