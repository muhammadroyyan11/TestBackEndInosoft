<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKendaraanRequest extends FormRequest
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
        ];
    }
}
