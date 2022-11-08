<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    // public function newpassword(Request $request){
    //     $user=User::where('phone',$request->phone)->first();
    //     $user->update([
    //         'password'=>Hash::make($request->newpassword),

    //     ]);
    //     return $user;

    // }

   
}
