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
    }

    public function create($kendaraan)
    {
        $kendaraan = Kendaraan::create($kendaraan);

        return $kendaraan;
    }

//    public function update($item, $id)
//    {
//        $kendaraan = Kendaraan::find($id);
//
//        $kendaraan->tahun_keluaran = $item['tahun_keluaran'];
//        $kendaraan->warna = $item['warna'];
//        $kendaraan->harga = $item['harga'];
//        $kendaraan->jenis_kendaraan = $item['jenis_kendaraan'];
//        $kendaraan->stok = $item['item'];
//        $kendaraan->terjual = $item['terjual'];
//
//        return $kendaraan;
//    }

    public function delete($id)
    {
        $kendaraan = Kendaraan::destroy($id) ? 'Data Deleted' : 'Data Not Found';

        return $kendaraan;
    }
}
