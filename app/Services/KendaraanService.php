<?php

namespace App\Services;


use App\Repositories\KendaraanRepository;
use Exception;
use Illuminate\Contracts\Validation\Validator;

class KendaraanService
{

    protected $kendaraanRepository;

    public function __construct(KendaraanRepository $kendaraanRepository)
    {
        $this->kendaraanRepository = $kendaraanRepository;
    }


    public function getAll()
    {
        $kendaraan = $this->kendaraanRepository->getAll();

        return $kendaraan;
        // return response()->json($todos->toArray());
    }
}