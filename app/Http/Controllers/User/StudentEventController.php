<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class StudentEventController extends Controller
{
    public function studentevents()
    {
        $currentDate = now(); 

        $events = Event::where('date', '>', $currentDate)
                       ->orderBy('date', 'desc')
                       ->paginate(2);

        // $events = Event::orderBy('created_at', 'desc')->paginate(2);
        return view('user.event.studentevent')->with('events', $events);
        
        // $events = Event::sortable()->paginate(10);
        // return view ('user.event.studentevent')->with('events', $events);

    }
    public function studeventshow(string $id)
    {
        $events = Event::find($id);
        return view('user.event.eventshow')->with('events', $events);
    }
}
