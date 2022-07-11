<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKendaraanRequest;
use App\Services\KendaraanService;
use Exception;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    protected $kendaraanService;

    public function __construct(KendaraanService $kendaraanService)
    {
        $this->middleware('auth:api');
        $this->kendaraanService = $kendaraanService;
    }

    public function index(): \Illuminate\Http\JsonResponse
    {
        try {
            return response()->json($this->kendaraanService->getAll());
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
