<?php

namespace App\Http\Controllers;

use App\Models\MetOceanData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MetOceanDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $oceanData = DB::table('met_ocean_data')
            ->orderBy('Time', 'ASC')
            ->get();
        return response()->json($oceanData);
    }
}
