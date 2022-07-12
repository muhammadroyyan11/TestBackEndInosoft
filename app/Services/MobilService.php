<?php

namespace App\Services;


use App\Repositories\KendaraanRepository;
use App\Repositories\MobilRepository;
use Exception;
use Illuminate\Contracts\Validation\Validator;

class MobilService
{
    protected $mobilRepository;

    public function __construct(MobilRepository $mobilRepository)
    {
        $this->mobilRepository = $mobilRepository;
    }


    public function getAll()
    {
        return $this->mobilRepository->getAll();
    }

    public function getStok()
    {
        return $this->mobilRepository->getStock();
    }

    public function getLaku()
    {
        return $this->mobilRepository->getLaku();
    }

    public function create($request)
    {
        $mobil = $this->mobilRepository->create($request->all());
        $result = [];

        if ($mobil) {
            $result['status'] = 'Data uploaded';
            $result['data'] = $mobil;
        } else {
            $result['status'] = 'Error upload data';
        }

        return $mobil;
    }
}
