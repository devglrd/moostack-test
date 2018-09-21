<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    CONST PATH_VIEW = "app.entities.account.";
    //public function __construct()
    //{
    //    if (!Auth::check()){
    //        return redirect()->back()->with('error', "Vous n'ête pas connectée");
    //    }
    //}
    
    public function logout(Request $request)
    {
        if (Auth::check()){
            Auth::logout();
            return redirect()->back()->with("success", "Vous êtes bien deconctée");
        }
        return redirect()->back();
    }
    
    
    public function showAccount(Request $request)
    {
        return view(self::PATH_VIEW . "show")->with([
        
        ]);
    }
    
    public function showDashboard(Request $request)
    {
        return view(self::PATH_VIEW . "dashboard")->with([
        
        ]);
    }
    
    public function showDocument(Request $request)
    {
        return view(self::PATH_VIEW . "documents.index")->with([
    
        ]);
    }
    
    public function showSkill(Request $request)
    {
        return view(self::PATH_VIEW . "skills.index")->with([
    
        ]);
    }
    
    public function showEvaluations(Request $request)
    {
        return view(self::PATH_VIEW . "evaluations.index")->with([
    
        ]);
    }
}
