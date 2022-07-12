<?php

namespace App\Http\Controllers;

use App\Services\MobilService;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    protected $mobilService;

    public function __construct(MobilService $mobilService)
    {
        $this->middleware('auth:api');
        $this->mobilService = $mobilService;
    }

    public function index(): \Illuminate\Http\JsonResponse
    {
        try {
            return response()->json($this->mobilService->getAll());
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    public function stock(): \Illuminate\Http\JsonResponse
    {
        try {
            return response()->json($this->mobilService->getStok());
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    public function laku(): \Illuminate\Http\JsonResponse
    {
        try {
            return response()->json($this->mobilService->getLaku());
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
