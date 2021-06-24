<?php

namespace App\Http\Controllers;

use App\Models\MetOceanData;
use Illuminate\Http\Request;

class MetOceanDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = Storage::get('city.txt');

        $row = explode("\t", $file);

        return $row;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MetOceanData  $metOceanData
     * @return \Illuminate\Http\Response
     */
    public function show(MetOceanData $metOceanData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MetOceanData  $metOceanData
     * @return \Illuminate\Http\Response
     */
    public function edit(MetOceanData $metOceanData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MetOceanData  $metOceanData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MetOceanData $metOceanData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MetOceanData  $metOceanData
     * @return \Illuminate\Http\Response
     */
    public function destroy(MetOceanData $metOceanData)
    {
        //
    }
}
