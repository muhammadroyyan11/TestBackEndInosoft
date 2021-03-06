<?php

namespace App\Services;


use App\Repositories\MobilRepository;
use App\Repositories\MotorRepository;
use Exception;
use Illuminate\Contracts\Validation\Validator;

class MotorService
{
    protected $motorRepositroy;

    public function __construct(MotorRepository $motorRepositroy)
    {
        $this->motorRepositroy = $motorRepositroy;
    }

    public function getAll()
    {
        return $this->motorRepositroy->getAll();
    }

    public function getStok()
    {
        return $this->motorRepositroy->getStock();
    }

    public function getLaku()
    {
        return $this->motorRepositroy->getLaku();
    }

    public function create($request)
    {
        $mobil = $this->motorRepositroy->create($request->all());
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
