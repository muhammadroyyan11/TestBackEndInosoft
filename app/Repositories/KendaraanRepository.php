<?php

namespace App\Repositories;

use App\Models\Kendaraan;


class KendaraanRepository {


    public function getAll()
    {
        return Kendaraan::all();
    }
}