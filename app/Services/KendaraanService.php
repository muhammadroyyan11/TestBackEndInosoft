<?php

namespace App\Services;


use App\Repositories\KendaraanRepository;
use Exception;
use Illuminate\Contracts\Validation\Validator;

class KendaraanService
{
    protected $kendaraanRepositoty;

    public function __construct(KendaraanRepository $kendaraanRepository)
    {
        $this->kendaraanRepositoty = $kendaraanRepository;
    }


    public function getAll()
    {
        $kendaraan = $this->kendaraanRepository->getAll();

        return $kendaraan;
    }
}