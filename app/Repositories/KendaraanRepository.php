<?php

namespace App\Repositories;

use App\Models\Kendaraan;


class KendaraanRepository {

    protected $post;

    public function __construct(Kendaraan $kendaraan)
    {
        $this->kendaraan = $kendaraan;
    }

    public function getAll()
    {
        return Kendaraan::all('mobil');
        return Kendaraan::where('jenis_kendaraan', 'motor')->get();
    }

    public function create($kendaraan)
    {
        $kendaraan = Kendaraan::create($kendaraan);

        return $kendaraan;
    }

    public function getMobil()
    {
        return Kendaraan::where('jenis_kendaraan', 'mobil')->get();
    }
}
