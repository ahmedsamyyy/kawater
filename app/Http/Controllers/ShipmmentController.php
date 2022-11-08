<?php

namespace App\Http\Controllers;

use App\Models\Shipmment;
use App\Http\Requests\StoreShipmmentRequest;
use App\Http\Requests\UpdateShipmmentRequest;

class ShipmmentController extends Controller
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
     * @param  \App\Http\Requests\StoreShipmmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShipmmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shipmment  $shipmment
     * @return \Illuminate\Http\Response
     */
    public function show(Shipmment $shipmment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shipmment  $shipmment
     * @return \Illuminate\Http\Response
     */
    public function edit(Shipmment $shipmment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShipmmentRequest  $request
     * @param  \App\Models\Shipmment  $shipmment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShipmmentRequest $request, Shipmment $shipmment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shipmment  $shipmment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shipmment $shipmment)
    {
        //
    }
}
