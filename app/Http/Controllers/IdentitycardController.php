<?php

namespace App\Http\Controllers;

use App\Models\Identitycard;
use App\Http\Requests\StoreIdentitycardRequest;
use App\Http\Requests\UpdateIdentitycardRequest;

class IdentitycardController extends Controller
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
     * @param  \App\Http\Requests\StoreIdentitycardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIdentitycardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Identitycard  $identitycard
     * @return \Illuminate\Http\Response
     */
    public function show(Identitycard $identitycard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Identitycard  $identitycard
     * @return \Illuminate\Http\Response
     */
    public function edit(Identitycard $identitycard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIdentitycardRequest  $request
     * @param  \App\Models\Identitycard  $identitycard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIdentitycardRequest $request, Identitycard $identitycard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Identitycard  $identitycard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Identitycard $identitycard)
    {
        //
    }
}
