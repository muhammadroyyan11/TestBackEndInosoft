<?php

namespace App\Models;

use App\Services\KendaraanService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $collection = 'kendaraans';

    public function __construct(KendaraanService $kendaraanService)
    {
        
    }
}
