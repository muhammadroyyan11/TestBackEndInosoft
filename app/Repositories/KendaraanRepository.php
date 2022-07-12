<?php

namespace App\Repositories;

use App\Models\Kendaraan;
use http\Env\Request;


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

    public function detail($id)
    {
        $kendaraan = Kendaraan::find($id);

        return $kendaraan;
    }

    public function update($data, $id)
    {
        $kendaraan = Kendaraan::find($id);

        $kendaraan->update($data);

        return $kendaraan;
    }

    public function delete($id): string
    {
        $kendaraan = Kendaraan::destroy($id) ? 'Item Has Been Deleted' : 'Deleted Error';

        return $kendaraan;
    }
}
