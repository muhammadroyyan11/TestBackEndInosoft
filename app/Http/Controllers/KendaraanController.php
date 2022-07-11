<?php

namespace App\Http\Controllers;

use App\Services\KendaraanService;
use Exception;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    private $kendaraanService;

    public function __construct(KendaraanService $kendaraanService)
    {
        $this->KendaraanService = $kendaraanService;
    }
    
    public function get()
    {
        try {
            return $this->KendaraanService->getAll();
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
