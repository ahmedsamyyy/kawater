<?php

namespace App\Http\Controllers;

use App\Models\DriverNumberTruck;
use App\Http\Requests\StoreDriverNumberTruckRequest;
use App\Http\Requests\UpdateDriverNumberTruckRequest;

class DriverNumberTruckController extends Controller
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
     * @param  \App\Http\Requests\StoreDriverNumberTruckRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDriverNumberTruckRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DriverNumberTruck  $driverNumberTruck
     * @return \Illuminate\Http\Response
     */
    public function show(DriverNumberTruck $driverNumberTruck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DriverNumberTruck  $driverNumberTruck
     * @return \Illuminate\Http\Response
     */
    public function edit(DriverNumberTruck $driverNumberTruck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDriverNumberTruckRequest  $request
     * @param  \App\Models\DriverNumberTruck  $driverNumberTruck
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDriverNumberTruckRequest $request, DriverNumberTruck $driverNumberTruck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DriverNumberTruck  $driverNumberTruck
     * @return \Illuminate\Http\Response
     */
    public function destroy(DriverNumberTruck $driverNumberTruck)
    {
        //
    }
}
