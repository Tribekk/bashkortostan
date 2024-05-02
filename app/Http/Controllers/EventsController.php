<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(){
        $events = Events::all();
        return view('events', compact('events'));
    }

    public function show(Request $request){
        $id = $request->id;
        $event = Events::query()->where('id', '=', $id)->get();
        return view('eventsId', compact('event'));
    }
}
