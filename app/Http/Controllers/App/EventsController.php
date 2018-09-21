<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    const PATH_VIEW = "app.entities.events.";
    public function index(Request $request)
    {
        $events = Event::with('getUser','getFile')->paginate(15);
        return view(self::PATH_VIEW . "index")->with([
            "events" => $events
        ]);
    }
}
