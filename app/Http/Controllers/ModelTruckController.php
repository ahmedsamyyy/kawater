<?php

namespace App\Http\Controllers;

use App\Models\ModelTruck;
use App\Http\Requests\StoreModelTruckRequest;
use App\Http\Requests\UpdateModelTruckRequest;

class ModelTruckController extends Controller
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
     * @param  \App\Http\Requests\StoreModelTruckRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModelTruckRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModelTruck  $modelTruck
     * @return \Illuminate\Http\Response
     */
    public function show(ModelTruck $modelTruck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModelTruck  $modelTruck
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelTruck $modelTruck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateModelTruckRequest  $request
     * @param  \App\Models\ModelTruck  $modelTruck
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateModelTruckRequest $request, ModelTruck $modelTruck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModelTruck  $modelTruck
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelTruck $modelTruck)
    {
        //
    }
}
