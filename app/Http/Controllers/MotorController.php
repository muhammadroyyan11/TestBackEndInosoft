<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MotorService;

class MotorController extends Controller
{
    protected $motorService;

     public function __construct(MotorService $motorService)
     {
         $this->middleware('auth:api');
         $this->motorService = $motorService;
     }

     public function index()
     {
         try {
             return response()->json($this->motorService->getAll());
         } catch (Exception $e) {
             return response()->json($e->getMessage());
         }
     }

    public function stock(): \Illuminate\Http\JsonResponse
    {
        try {
            return response()->json($this->motorService->getStok());
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    public function laku(): \Illuminate\Http\JsonResponse
    {
        try {
            return response()->json($this->motorService->getLaku());
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
