<?php

namespace App\Http\Controllers;
use App\Models\Participant;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;
        
                if($usertype=='user')
                {
                    $events = Event::orderBy('created_at', 'desc')->paginate(2);
                    return view('user.event.studentevent')->with('events', $events);
                }
        

              else if($usertype=='admin')
                {
                    $events = Event::all();
        $eventCount = $events->count();

        $participants = Participant::all();
        $participantsCount = $participants->count();

        $users = User::where('usertype', 'user')->get();
        $usersCount = $users->count();

        $admin = User::where('usertype', 'admin')->get();
        $adminCount = $admin->count();
        
        $currentDate = now(); 
                    $events = Event::where('date', '>', $currentDate)
                                   ->orderBy('date', 'desc')
                                   ->paginate(5);
                                   
        return view ('admin.dash')
        ->with('events', $events)->with('eventCount', $eventCount)
        ->with('participants', $participants)->with('participantsCount', $participantsCount)
        ->with('users', $users)->with('usersCount', $usersCount)
        ->with('admin', $admin)->with('adminCount', $adminCount);;
                }

                
                else if($usertype=='super'){
                    $events = Event::all();
                    $eventCount = $events->count();
            
                    $participants = Participant::all();
                    $participantsCount = $participants->count();
            
                    $users = User::where('usertype', 'user')->get();
                    $usersCount = $users->count();
            
                    $admin = User::where('usertype', 'admin')->get();
                    $adminCount = $admin->count();

                    $currentDate = now(); 
                    $events = Event::where('date', '>', $currentDate)
                                   ->orderBy('date', 'desc')
                                   ->paginate(5);
                    return view ('super.dash')
                    ->with('events', $events)->with('eventCount', $eventCount)
                    ->with('participants', $participants)->with('participantsCount', $participantsCount)
                    ->with('users', $users)->with('usersCount', $usersCount)
                    ->with('admin', $admin)->with('adminCount', $adminCount);;
                }

                else
                {
                    return redirect()->back();
                }
        }

    }

    public function post()
    {

        return view("post");
    }
}
