<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function view() {
        return view('site.data');
    }
    public function getOceanData() {
        $oceanData = DB::table('met_ocean_data')
            ->orderBy('Time', 'ASC')
            ->get();
        return response()->json($oceanData);
    }
}
