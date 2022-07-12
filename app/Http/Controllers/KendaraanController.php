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

    public function store(StoreKendaraanRequest $request): \Illuminate\Http\JsonResponse
    {
        try {
            return response()->json($this->kendaraanService->create($request));
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        try {
            return response()->json($this->kendaraanService->delete($id));
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
