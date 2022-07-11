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
        return $this->kendaraanRepository->getAll();
    }

    public function create($request)
    {
        $kendaraan = $this->kendaraanRepository->create($request->all());
        $result = [];

        if ($kendaraan) {
            $result['status'] = 'Data uploaded';
            $result['data'] = $kendaraan;
        } else {
            $result['status'] = 'Error upload data';
        }

        return $kendaraan;
    }
}
