<?php

namespace App\Http\Controllers;

use App\Models\TruckOrder;
use App\Http\Requests\StoreTruckOrderRequest;
use App\Http\Requests\UpdateTruckOrderRequest;
use App\Models\safeTruck;
use App\Models\Shipmment;
use App\Models\User;
use Illuminate\Http\Request;

class TruckOrderController extends Controller
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
     * @param  \App\Http\Requests\StoreTruckOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function saveTruckOrder(Request $request)
    {
        try {



            $shipment_picture = $request->file('shipment_picture');
            $shipment_picture_name = Time().'-'.$shipment_picture->getClientOriginalName();
            $file_path = public_path().'/images';
            $shipment_picture->move($file_path,$shipment_picture_name);


            $packing_list_picture = $request->file('packing_list_picture');
            $packing_list_picture_name = Time().'-'.$packing_list_picture->getClientOriginalName();
            $file_path = public_path().'/images';
            $packing_list_picture->move($file_path,$packing_list_picture_name);

            $safetruck=safeTruck::create([
                'name'=>$request->name,
                'price'=>$request->price,
                'image_one'=>$shipment_picture_name,
                'image_two'=>$packing_list_picture_name,



            ]);

            $shipment=Shipmment::create([
                'type'=>$request->type,
                'kg'=>$request->kg,
                'desc'=>$request->desc,
                'truck_type_id'=>$request->truck_type_id,
                'tall_truck_id'=>$request->tall_truck_id,
                'ard_truck_id'=>$request->ard_truck_id,
                'height_truck_id'=>$request->height_truck_id,
                'loadspacitie_id'=>$request->loadspacitie_id,
                'number_mhawer_id'=>$request->number_mhawer_id,
                'number_truck_id'=>$request->number_truck_id,



            ]);
            $reciever=User::where('email',$request->email)->first();
            $truckorder=TruckOrder::create([
                'adress_name'=>$request->adress_name,
                'street_name'=>$request->street_name,
                'description'=>$request->description,
                'governorate_id'=>$request->governorate_id,
                'city_id'=>$request->city_id,
                'country_id'=>$request->country_id,
                'let'=>$request->let,
                'lang'=>$request->lang,
                'date'=>$request->date,
                'time'=>$request->time,
                'sender_id'=>auth('api')->user()->id,
                'reciever_id'=>$reciever->id,
                'to_let'=>$request->to_let,
                'to_lang'=>$request->to_lang,
                'to_adress_name'=>$request->to_adress_name,
                'to_street_name'=>$request->to_street_name,
                'to_description'=>$request->to_description,
                'to_country_id'=>$request->to_country_id,
                'to_governorate_id'=>$request->to_governorate_id,
                'to_city_id'=>$request->to_city_id,
                'name'=>$request->name,
                'phone'=>$request->phone,
                'shipment_id'=>$shipment->id,
                'safetruck_id'=>$safetruck->id,

            ]);
            return $truckorder;



        } catch (\Throwable $th) {
            return response()->json($th->getMessage());

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TruckOrder  $truckOrder
     * @return \Illuminate\Http\Response
     */
    public function elwarda(Request $request)
    {
        try {
            $user=auth('api')->user();
            /////لو عندك سيندر ايدي ابعتلي اليوسر بتاعه بالأى دي عشان اعرفه
            $shimpnets= TruckOrder::where('sender_id',$user->id)->get();
            return $shimpnets;
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());

        }

    }

    public function elsadra(Request $request)
    {
        try {
            $user=auth('api')->user();
            /////لو عندك رسيفر ايدي ابعتلي اليوسر بتاعه بالأى دي عشان اعرفه
            $shimpnets= TruckOrder::where('reciever_id',$user->id)->get();
            return $shimpnets;
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());

        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTruckOrderRequest  $request
     * @param  \App\Models\TruckOrder  $truckOrder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTruckOrderRequest $request, TruckOrder $truckOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TruckOrder  $truckOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(TruckOrder $truckOrder)
    {
        //
    }
}
