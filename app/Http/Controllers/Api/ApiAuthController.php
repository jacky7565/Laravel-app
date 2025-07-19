<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class ApiAuthController extends Controller
{
    function index(Request $requst){
        $userEmail=User::where('email',$requst->email)->first();

        if($userEmail && Hash::check($requst->password,$userEmail->password)){
           $token= $userEmail->createToken('api-token')->plainTextToken;
             return response()->json(['message'=> 'Login successful','token'=>$token,'user'=>$userEmail]);
        }
        else{
            return response()->json(['message'=>"Invalid Credentials"],401);
        }
        return $userEmail;
    }
}
