<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\Country;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        $user = UserResource::collection(User::all());
        return response()->json($user);
    }
    public function show(User $id)
    {
        return new UserResource($id);
    }
    public function store(UserRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return new UserResource($user);
    }
    public function update(Request $request, User $id)
    {
        $id->email = $request->email;
        $id->password = $request->password;
        // return response()->json(new UserResource($id));
        return new UserResource($id);
    }

    public function sendcode($phone)
    {
        $user = User::where('phone', $phone)->first();
        if ($user) {
            $code = rand(1111, 7777);
            $user->code = $code;
            $user->save();
            return $user;
        } else {
            $newuser = new User;
            $newuser->phone = $phone;
            $codeuser = rand(1111, 7777);
            $user->code = $codeuser;
            $user->save();
            return 'eh eldina';
        }
    }

    public function login(Request $request)
    {
        // return $request;
        try {
            $request->validate([
                'phone' => 'required',
                'password' => 'required',
            ]);

            $credentials = $request->only(['phone', 'password']);

            if (!$token = auth('api')->attempt($credentials)) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }
            return response()->json($token);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
    }

    public function updateregister(Request $request)
    {
        $profileregister = $request->file('profileregister');

        $shipment_profile_picture_name = Time() . '-' . $profileregister->getClientOriginalName();
        $file_path = public_path() . '/images';
        $profileregister->move($file_path, $shipment_profile_picture_name);

        $backprofileregister = $request->file('backprofileregister');
        $backprofile_name = Time() . '-' . $backprofileregister->getClientOriginalName();
        $file_path = public_path() . '/images';
        $backprofileregister->move($file_path, $backprofile_name);
        $user = auth('api')->user();
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $shipment_profile_picture_name,
            'imagetwo' => $backprofile_name,
            'let' => $request->let,
            'lang' => $request->lang,

        ]);
        return $user;
    }
    public function verifyCode(Request $request)
    {
        try {
            $user = User::where('phone', $request->phone)->first();
            if ($user) {
                if ($user->code == $request->code) {
                    $user->verifyphone = 1;
                    $user->save();
                    return $user;
                } else {
                    return 'Errorr';
                }
            }
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
    }
    public function forgetpassword(Request $request)
    {
        try {
            $user = User::where('phone', $request->phone)->first();
            $code = rand(1111, 9999);
            $user->code = $code;
            return $user;
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
    }
    public function newpassword(Request $request)
    {
        try {
            $user = User::where('phone', $request->phone)->first();
            $user->update([
                'password' => Hash::make($request->newpassword),
            ]);
            return $user;
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
    }

    public function Register(Request $request)
    {
        try {
            $request->validate([

                'password' => 'required',
            ]);
            $user=User::create([
                'country_id'=>$request->country_id,
                'phone'=>$request->phone,
                'password'=>Hash::make($request->password),
            ]);
            $code=rand(1111,9999);
            $user->code=$code;
            $user->save();
            return $user;
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }

    }
    public function listRegister()
    {
        return $user = Country::get();
    }

    public function updateprofile(Request $request){

        try {

            $user=auth('api')->user();

        $profile = $request->file('profile');

        $shipment_profile_picture_name = Time().'-'.$profile->getClientOriginalName();
        $file_path = public_path().'/images';
        $profile->move($file_path,$shipment_profile_picture_name);

        $backprofile = $request->file('backprofile');
        $backprofile_name = Time().'-'.$backprofile->getClientOriginalName();
        $file_path = public_path().'/images';
        $backprofile->move($file_path,$backprofile_name);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'image'=>$shipment_profile_picture_name,
            'imagetwo'=>$backprofile_name,

        ]);
        return $user;
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }



    }
}
