<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    
    public function loginUser(Request $request)
    {
        if (!$request->password || !$request->email) {
            return response()->json(["error" => "You should passe credentials"], 400);
        }
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json(["error" => "No user found in db"], 404);
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            Auth::login($user);
            $access_token = Auth::user()->createToken('login')->accessToken;
            return response()->json(["access_token" => $access_token]);
        } else {
            return response()->json(["error" => "Wrong credentials"], 401);
        }
    }
    
    public function getAccessToken(Request $request)
    {
        if (Auth::check()) {
            $access_token = Auth::user()->createToken('login')->accessToken;
            return response()->json(["access_token" => $access_token]);
        } else {
            return response()->json(["error" => "You are not logged in"]);
        }
    }
}
