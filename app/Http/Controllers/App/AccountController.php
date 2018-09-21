<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function logout(Request $request)
    {
        if (Auth::check()){
            Auth::logout();
            return redirect()->back()->with("success", "Vous êtes bien deconctée");
        }
        return redirect()->back();
    }
}
