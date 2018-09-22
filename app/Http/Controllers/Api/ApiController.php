<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function userOauthInfo(Request $request)
    {
        if (!$request->password || !$request->email) {
            return response()->json(["error" => "You should passe credentials"]);
        }
        $user = User::where('email', $request->email)->first();
        if (!$user){
            return response()->json(["error" => "No user found in db"]);
        }
        if (Hash::check($request->password, $user->password)) {
            return response()->json(['client_id' => $user->getOauth->id, "secret" => $user->getOauth->secret]);
        }else{
            return response()->json(["error" => "Wrong credentials"]);
        }
        
    }
}
