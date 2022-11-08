<?php

namespace App\Http\Controllers\authDriver;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\City;
use App\Models\Country;
use App\Models\DriverLogin as ModelsDriverLogin;
use App\Models\DriverShipmment;
use App\Models\DriverTypeTruck;
use App\Models\Identitycard;
use App\Models\UpdateImage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class DriverLogin extends Controller
{
    public function driverlogin(Request $request) {
        // return $request;
        try {
            $request->validate([
                'phone' => 'required',
                'password' => 'required',
            ]);

            $credentials = $request->only(['phone', 'password']);

            if (!$token = auth('driver')->attempt($credentials)) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }
            return response()->json($token);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
}
////////forget password  checkdrivercode روح اكتب التلفون واطلع على فانكشن جديدة اسمها
public function driverforgetpassword(Request $request){
    try {
        $user=ModelsDriverLogin::where('phone',$request->phone)->first();

        return $this->checkdrivercode($request->phone);

    } catch (\Throwable $th) {
        return response()->json($th->getMessage());
    }

}
////////////////استقبل الفون اللى جايلك وابعت معاه كود عشوائي
public function checkdrivercode($phone){
    try {
        $user=ModelsDriverLogin::where('phone',$phone)->first();
        $code=rand(1111,9999);
        $user->code=$code;
        $user->save();
       return $user;

    } catch (\Throwable $th) {
        return response()->json($th->getMessage());

    }

}
public function driverNewPassword(CheckPassword $request){
    try {
        $user=ModelsDriverLogin::where('phone',$request->phone)->first();
        $user->update([
            'password'=>Hash::make($request->newpassword),
        ]);
        return $user;

    } catch (\Throwable $th) {
        return response()->json($th->getMessage());
    }
}

public function driverRegister(Request $request){
    $image_first = $request->file('image_first');

        $picture_name = Time().'-'.$image_first->getClientOriginalName();
        $file_path = public_path().'/images';
        $image_first->move($file_path,$picture_name);



        $image_second = $request->file('image_second');

        $picture_name_second = Time().'-'.$image_second->getClientOriginalName();
        $file_path = public_path().'/images';
        $image_second->move($file_path,$picture_name_second);




        $image_mine_one = $request->file('image_mine_one');

        $picture_name_mine = Time().'-'.$image_mine_one->getClientOriginalName();
        $file_path = public_path().'/images';
        $image_mine_one->move($file_path,$picture_name_mine);

        $image_mine_two = $request->file('image_mine_two');

        $picture_name_mine_two = Time().'-'.$image_mine_two->getClientOriginalName();
        $file_path = public_path().'/images';
        $image_mine_two->move($file_path,$picture_name_mine_two);

    $update_image=UpdateImage::create([
        'let'=>$request->let,
        'lang'=>$request->lang ,
        'image_first'=>$picture_name,
        'image_second'=>$picture_name_second,
        'image_mine_one'=>$picture_name_mine,
        'image_mine_two'=>$picture_name_mine_two,

    ]);


    try {
        if ($request->type =='Identification_card' ) {
            $card = $request->file('card');

        $card_name = Time().'-'.$card->getClientOriginalName();
        $file_path = public_path().'/images';
        $card->move($file_path,$card_name);

        $backcard = $request->file('backcard');
            $backprofile_name = Time().'-'.$backcard->getClientOriginalName();
            $file_path = public_path().'/images';
            $backcard->move($file_path,$backprofile_name);


        $indenty=Identitycard::create([
            'number_card'=>$request->number_card,
            'image_card'=>$card_name,
            'image_card_two'=>$backprofile_name,

        ]);
        }else if ($request->type =='passport') {
            $card = $request->file('card');

        $card_name = Time().'-'.$card->getClientOriginalName();
        $file_path = public_path().'/images';
        $card->move($file_path,$card_name);

        $backcard = $request->file('backcard');
            $backprofile_name = Time().'-'.$backcard->getClientOriginalName();
            $file_path = public_path().'/images';
            $backcard->move($file_path,$backprofile_name);
            $indenty=Identitycard::create([
                'image_card'=>$card_name,
                'image_card_two'=>$backprofile_name,
                'phone'=>$request->phone,

            ]);

        }else if ($request->type == 'others') {
            $card = $request->file('card');

            $card_name = Time().'-'.$card->getClientOriginalName();
            $file_path = public_path().'/images';
            $card->move($file_path,$card_name);
            $indenty=Identitycard::create([
                'phone'=>$request->phone,
                'image_card'=>$card_name,

            ]);



        }


        $request->validate([

            'password' => 'required',
        ]);
        $driver=ModelsDriverLogin::create([
            'country_id'=>$request->country_id,
            'name'=>$request->name,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password),
            'identitycard_id'=>$indenty->id,
            'update_image_id'=>$update_image->id,
        ]);

        $driverupdate=DriverShipmment::create([
            'driver_type_truck_id'=>$request->driver_type_truck_id,
            'driver_number_truck_id'=>$request->driver_number_truck_id,
            'driver_category_truck_id'=>$request->driver_category_truck_id,
            'number_truck'=>$request->number_truck,
            'model_truck_id'=>$request->model_truck_id,
            'driver_tall_truck_id'=>$request->driver_tall_truck_id,
            'driverard_truck_id'=>$request->driverard_truck_id,
            'driverheight_truck_id'=>$request->driverheight_truck_id,
            'driver_load_spacitie_id'=>$request->driver_load_spacitie_id,
            'drivermhawer_id'=>$request->drivermhawer_id,
            'driver_login_id'=>$driver->id,


        ]);
        $code=rand(1111,8888);
        $driver->code_driver=$code;
        $driver->save();
        return $driver;
    } catch (\Throwable $th) {
        return response()->json($th->getMessage());
    }
}
public function updateTruk(Request $request){
    // $driver=DriverShipmment::where('driver_type_truck_id')->first();
    $drive=auth('driver')->user();

    // return $driver=DriverShipmment::where('driver_login_id',$drive->id)->first();
     $truck=$drive->drivershipmment;

    $truck->update($request->all());
    return $truck;



}

}
