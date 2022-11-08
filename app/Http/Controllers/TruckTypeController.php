<?php

namespace App\Http\Controllers;

use App\Models\TruckType;
use App\Http\Requests\StoreTruckTypeRequest;
use App\Http\Requests\UpdateTruckTypeRequest;

class TruckTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreTruckTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTruckTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TruckType  $truckType
     * @return \Illuminate\Http\Response
     */
    public function show(TruckType $truckType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TruckType  $truckType
     * @return \Illuminate\Http\Response
     */
    public function edit(TruckType $truckType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTruckTypeRequest  $request
     * @param  \App\Models\TruckType  $truckType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTruckTypeRequest $request, TruckType $truckType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TruckType  $truckType
     * @return \Illuminate\Http\Response
     */
    public function destroy(TruckType $truckType)
    {
        //
    }
}
