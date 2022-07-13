<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKendaraanRequest;
use App\Services\KendaraanService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    protected $kendaraanService;

    public function __construct(KendaraanService $kendaraanService)
    {
//        $this->middleware('auth:api');
        $this->kendaraanService = $kendaraanService;
    }

    public function index(): JsonResponse
    {
        try {
            return response()->json($this->kendaraanService->getAll());
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    public function store(StoreKendaraanRequest $request): JsonResponse
    {
        try {
            return response()->json($this->kendaraanService->create($request));
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    public function update(Request $request, $id): JsonResponse
    {
        try {
            return response()->json($this->kendaraanService->update($request, $id));
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    public function show(Request $request, $id): JsonResponse
    {
        try {
            return response()->json($this->kendaraanService->detail($id));
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    public function destroy($id): JsonResponse
    {
        try {
            return response()->json($this->kendaraanService->delete($id));
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
