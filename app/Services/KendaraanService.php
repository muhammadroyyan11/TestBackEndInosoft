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

    public function getMobil()
    {
        return $this->kendaraanRepository->getMobil();
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

    public function update($request, $id)
    {
        return $this->kendaraanRepository->update($request->all(), $id);
    }

    public function detail($id)
    {
        return $this->kendaraanRepository->detail($id);
    }

    public function delete($id): string
    {
        return $this->kendaraanRepository->delete($id);
    }
}
