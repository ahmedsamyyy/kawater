<?php

namespace App\Http\Controllers;

use App\Models\safeTruck;
use App\Http\Requests\StoresafeTruckRequest;
use App\Http\Requests\UpdatesafeTruckRequest;

class SafeTruckController extends Controller
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
     * @param  \App\Http\Requests\StoresafeTruckRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresafeTruckRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\safeTruck  $safeTruck
     * @return \Illuminate\Http\Response
     */
    public function show(safeTruck $safeTruck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\safeTruck  $safeTruck
     * @return \Illuminate\Http\Response
     */
    public function edit(safeTruck $safeTruck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesafeTruckRequest  $request
     * @param  \App\Models\safeTruck  $safeTruck
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesafeTruckRequest $request, safeTruck $safeTruck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\safeTruck  $safeTruck
     * @return \Illuminate\Http\Response
     */
    public function destroy(safeTruck $safeTruck)
    {
        //
    }
}
