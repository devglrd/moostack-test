<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function getCompetences(Request $request)
    {
        return response()->json(["skills" => Auth::user()->getSkills]);
    }
    
    public function getNotes(Request $request)
    {
        return response()->json(["notes" => Auth::user()->getNotes]);
    }
    
    public function getDocument(Request $request)
    {
        return response()->json(["files" => Auth::user()->getFiles]);
    }
    
    public function getAccount(Request $request)
    {
        return response()->json(["account" => Auth::user()]);
        
    }
}
