<?php

namespace App\Http\Controllers;

use App\Models\NumberTruck;
use App\Http\Requests\StoreNumberTruckRequest;
use App\Http\Requests\UpdateNumberTruckRequest;

class NumberTruckController extends Controller
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
     * @param  \App\Http\Requests\StoreNumberTruckRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNumberTruckRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NumberTruck  $numberTruck
     * @return \Illuminate\Http\Response
     */
    public function show(NumberTruck $numberTruck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NumberTruck  $numberTruck
     * @return \Illuminate\Http\Response
     */
    public function edit(NumberTruck $numberTruck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNumberTruckRequest  $request
     * @param  \App\Models\NumberTruck  $numberTruck
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNumberTruckRequest $request, NumberTruck $numberTruck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NumberTruck  $numberTruck
     * @return \Illuminate\Http\Response
     */
    public function destroy(NumberTruck $numberTruck)
    {
        //
    }
}
