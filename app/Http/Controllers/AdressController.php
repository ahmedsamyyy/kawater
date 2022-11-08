<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use App\Http\Requests\StoreAdressRequest;
use App\Http\Requests\UpdateAdressRequest;
use Illuminate\Http\Request;

class AdressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return $adress= Adress::get();
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }

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
     * @param  \App\Http\Requests\StoreAdressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $adress=Adress::create([
                'name'=>$request->name,
                'user_id'=>$request->user_id,
                'country_id'=>$request->country_id,
                'governorate_id'=>$request->governorate_id,
                'city_id'=>$request->city_id,
                'description'=>$request->description,
                'street_name'=>$request->description
            ]);
            return $adress;
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function show(Adress $adress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function edit(Adress $adress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdressRequest  $request
     * @param  \App\Models\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdressRequest $request, Adress $adress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        try {
            $adress=Adress::find($id);
            $adress->delete();
            return $adress;
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());

        }

    }
}
