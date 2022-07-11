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
        return Kendaraan::all();
    }

    public function create($kendaraan)
    {
        $kendaraan = Kendaraan::create($kendaraan);

        return $kendaraan;
    }
}
