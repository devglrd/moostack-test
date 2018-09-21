<?php

namespace App\Http\Controllers\App;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticsController extends Controller
{
    
    const PATH_VIEW = "app.entities.statics.";
    
    public function showHome(Request $request)
    {
        return view(self::PATH_VIEW . "home")->with([
        
        ]);
        
        
    }
    
    
    public function showAnnuaire(Request $request)
    {
        $users = User::orderBy("id", "DESC")->get();
        return view(self::PATH_VIEW . "annuaire")->with([
            "users" => $users
        ]);
    }
}
