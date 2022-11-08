<?php

namespace App\Http\Controllers;

use App\Models\TallTruck;
use App\Http\Requests\StoreTallTruckRequest;
use App\Http\Requests\UpdateTallTruckRequest;

class TallTruckController extends Controller
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
     * @param  \App\Http\Requests\StoreTallTruckRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTallTruckRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TallTruck  $tallTruck
     * @return \Illuminate\Http\Response
     */
    public function show(TallTruck $tallTruck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TallTruck  $tallTruck
     * @return \Illuminate\Http\Response
     */
    public function edit(TallTruck $tallTruck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTallTruckRequest  $request
     * @param  \App\Models\TallTruck  $tallTruck
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTallTruckRequest $request, TallTruck $tallTruck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TallTruck  $tallTruck
     * @return \Illuminate\Http\Response
     */
    public function destroy(TallTruck $tallTruck)
    {
        //
    }
}
