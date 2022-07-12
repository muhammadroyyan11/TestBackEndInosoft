<?php

namespace App\Models;

// use App\Services\KendaraanService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $collection = 'kendaraans';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tahun_keluaran',
        'warna',
        'harga',
        'jenis_kendaraan',
        'motor',
        'mobil'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'update_at',
        'create_at',
    ];

}
