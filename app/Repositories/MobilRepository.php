<?php

namespace App\Repositories;

use App\Models\Kendaraan;


class MobilRepository {

    protected $kendaraan;

    public function __construct(Kendaraan $kendaraan)
    {
        $this->kendaraan = $kendaraan;
    }

    public function getAll()
    {
        return Kendaraan::where('jenis_kendaraan', 'mobil')->get();
    }

    public function getStock()
    {
        return Kendaraan::where('jenis_kendaraan', 'mobil')->get()->makeHidden(['terjual']);
    }

    public function getLaku()
    {
        return Kendaraan::where('jenis_kendaraan', 'mobil')->get()->makeHidden(['stok']);
    }

    public function create($kendaraan)
    {
        $kendaraan = Kendaraan::create($kendaraan);

        return $kendaraan;
    }
}
