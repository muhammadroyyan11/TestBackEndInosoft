<?php

namespace Tests\Feature;

use App\Models\Kendaraan;
use App\Models\User;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    //    get all kendaraan
    public function test_get_kendaraan()
    {
        $user = User::factory()->count(1)->create()->first();

        $this->actingAs($user, 'api/auth/login');

        $response = $this->get('api/v1/kendaraan');

        $response->assertStatus(200);
    }

    //post kendaraan
    public function test_post_kendaraan()
    {
        $user = User::factory()->count(1)->create()->first();

        $this->actingAs($user, 'api/auth/login');

        $item = array(
            "tahun_keluaran" => "2000",
            "warna" => "merah jingga",
            "harga" => 25000000,
            "stok" => 12,
            "terjual" => 1,
            "jenis_kendaraan" => "motor",
            "motor" => [
                "mesin" => "Yamaha",
                "tipe_suspensi" => "harley",
                "tipe_transmisi" => "nsad"
            ]
        );

        $response = $this->post('api/v1/kendaraan', $item);

        $response->assertStatus(200);
    }

    //put kendaraan
    public function test_put_kendaraan()
    {
        $user = User::factory()->count(1)->create()->first();

        $this->actingAs($user, 'api/auth/login');

        $kendaraan = Kendaraan::factory()->count(1)->create()->first();

        $item = [
            "tahun_keluaran" => "2000",
            "warna" => "merah jingga",
            "harga" => 25000000,
            "stok" => 12,
            "terjual" => 2,
        ];

        $this->delete(route('kendaraan.update', $kendaraan->id), $item)->assertStatus(200);
    }

    //delete kendaraan
    public function test_delete_kendaraan()
    {
        $user = User::factory()->count(1)->create()->first();

        $this->actingAs($user, 'api/auth/login');

        $kendaraan = Kendaraan::factory()->create([
            "tahun_keluaran" => "2000",
            "warna" => "merah jingga",
            "harga" => 25000000,
            "stok" => 12,
            "terjual" => 1,
            "jenis_kendaraan" => "motor",
            "motor" => [
                "mesin" => "Yamaha",
                "tipe_suspensi" => "harley",
                "tipe_transmisi" => "nsad"
            ]
        ]);

        $this->delete(route('kendaraan.delete', $kendaraan->id))->assertStatus(200);
    }

    //    get kendaraan by id
    public function test_get_kendaraan_id()
    {
        $user = User::factory()->count(1)->create()->first();

        $this->actingAs($user, 'api/auth/login');

        $kendaraan = Kendaraan::factory()->count(1)->create()->first();

        $response = $this->get('api/v1/kendaraan/' ,['id' => $kendaraan->id]);

        $response->assertStatus(200);
    }

    //    get all mobil
    public function test_get_mobil()
    {
        $user = User::factory()->count(1)->create()->first();

        $this->actingAs($user, 'api/auth/login');

        $response = $this->get('api/v1/mobil');

        $response->assertStatus(200);
    }

    //    get all mobil transaksi
    public function test_get_mobil_terjual()
    {
        $user = User::factory()->count(1)->create()->first();

        $this->actingAs($user, 'api/auth/login');

        $response = $this->get('api/v1/mobilTerjual');

        $response->assertStatus(200);
    }

    //    get all mobil stok
    public function test_get_mobil_stok()
    {
        $user = User::factory()->count(1)->create()->first();

        $this->actingAs($user, 'api/auth/login');

        $response = $this->get('api/v1/mobilStok');

        $response->assertStatus(200);
    }

    //    get all motor
    public function test_get_motor()
    {
        $user = User::factory()->count(1)->create()->first();

        $this->actingAs($user, 'api/auth/login');

        $response = $this->get('api/v1/mobil');

        $response->assertStatus(200);
    }

    // get transaksi
    public function test_get_motor_transaksi()
    {
        $user = User::factory()->count(1)->create()->first();

        $this->actingAs($user, 'api/auth/login');

        $response = $this->get('api/v1/motorTerjual');

        $response->assertStatus(200);
    }

    // get stok
    public function test_get_motor_stok()
    {
        $user = User::factory()->count(1)->create()->first();

        $this->actingAs($user, 'api/auth/login');

        $response = $this->get('api/v1/motorStok');

        $response->assertStatus(200);
    }
}
