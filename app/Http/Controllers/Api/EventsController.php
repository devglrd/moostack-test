<?php

namespace App\Http\Controllers\Api;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::with('getUser','getFile')->paginate(15);
        return response()->json($events);
    }
}
