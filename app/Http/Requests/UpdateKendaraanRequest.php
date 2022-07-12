<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKendaraanRequest
{
    public function rules(): array
    {
        return [
            'tahun_keluaran' => [
                'required',
            ],
            'warna' => [
                'required',
            ],
            'harga' => [
                'required',
            ],
            'jenis_kendaraan' => [
                'required',
            ],
            'stok' => [
                'required',
            ],
            'terjual' => [
                'required',
            ]
        ];
    }
}
