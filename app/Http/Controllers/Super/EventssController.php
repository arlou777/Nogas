<?php

namespace App\Http\Controllers\Super;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\EventsRequest;
use App\Models\Participant;
use App\Models\Event;
use App\Models\User;
use App\Models\EventImages;
use PDF;


class EventssController extends Controller
{

    public function temp()
        {
           
            return view ('/admin.temp');

        }
        
        public function events()
        {

            
            $events = Event::orderBy('created_at', 'desc')->paginate(10);
            return view('/super.event.event')->with('events', $events);
            

        }

        public function eventfinish()
        {
            $currentDate = now(); 
            $events = Event::where('date', '<', $currentDate)
                           ->orderBy('date', 'desc')
                           ->paginate(10);
        
            return view('/super.event.eventfinish')->with('events', $events);
        }

        public function edit($id)
    {
        $events = Event::find($id);
       return view('/super.event.eventedit')->with('events', $events);
    }
    

    public function eventup(EventsRequest $request, $id)
{
    // Retrieve the event from the database based on the provided $id
    $event = Event::find($id);

    // You may want to handle the case when the event is not found
    if (!$event) {
        return redirect('events')->with('error', 'Event not found!');
    }

    // Update the event with the new data
    $input = $request->validated();

    $event->update($input);

    // Handle event images only if files are uploaded
    if ($request->hasFile('document')) {
        $event_images = EventImages::where('event_id', $id)->get();

        // Delete existing images
        foreach ($event_images as $image) {
            if (!is_null($image->hashname)) {
                Storage::disk('public')->delete($image->hashname);
                $image->delete();
            }
        }

        // Upload and save new images
        foreach ($request->file('document') as $value) {
            $event_images = [
                'document' => $value->getClientOriginalName(),
                'hashname' => 'document/' . $value->hashName(),
                'event_id' => $event->id,
            ];

            $value->storePublicly('document', 'public');

            EventImages::create($event_images);
        }
    }

    return redirect('events')->with('status', 'Event Updated!');
}

  
    

    public function eventdelete($id)
    {

         $events = Event::findOrFail($id);
         $participants = Participant::where('events_id', $id);
         $event_images = EventImages::where('event_id', $id);
         $participants->delete();
         $event_images->delete();
         $events->delete();
         return redirect('events')->with('status','The Data is Delete!'); 

    }

    public function addevent(EventsRequest $request)
    {
        $input = $request->validated();
        $admin = auth()->user();

        // Add the admin's ID to the input data
        $input['admin_id'] = $admin->id;
        
        $event = Event::create($input);

        if ($request->hasFile('document')) {
            foreach ($request->document as $value) {
                if ($value) { // Check if a file was uploaded
                    $event_images = [
                        'document' => $value->getClientOriginalName(),
                        'hashname' => 'document/' . $value->hashName(),
                        'event_id' => $event->id
                    ];
                    
                    $value->storePublicly('document', 'public');
                    
                    EventImages::create($event_images);
                }
            }
        }

        // return dd($request->document);
         return redirect('events')->with('status', 'Event Added!');
    }

    public function add()
    {
        
        return view ('super.event.addevent');

    }

    public function search()
    {
        $search_text = $_GET['query'];
        $events = Event::sortable()->where('eventtype','LIKE', '%'.$search_text.'%')->get();

        return view('super.event.searchevent',compact('events'));
    }

    public function tosearch()
    {
        $from_date = $_GET['from_date'];
        $to_date = $_GET['to_date'];


        $events = Event::sortable()->whereBetween('date', [$from_date, $to_date])->get();

            return view('super.event.tosearch', compact('events'));
    }

    

    public function show(string $id)
    {
        $events = Event::find($id);
        return view('super.event.showevent')->with('events', $events);
    }



    public function partshow($id)
    {
       
        $participants = Participant::where('events_id', $id)->get();
        $participantCount = $participants->count();
        return view('super.event.eventpart')->with('participants', $participants)->with('participantCount', $participantCount);
    }
    public function creatpdf($user_id)
    {
       
      // Retrieve participants for the specified event
    $participants = Participant::where('events_id', $user_id)->get();

    // Check if participants were retrieved
    if ($participants->isEmpty()) {
        // Handle the case where no participants were found for the event
        return "No participants found for this event.";
    }

    // Generate the PDF with the participants' data
    $pdf = PDF::loadView('super.event.pdf', compact('participants'))->setPaper('a4', 'portrait')->setWarnings(false);
    return $pdf->stream();
    }
    
    public function dash()
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

        return view ('super.dash')->with('events',$events)
        ->with('events', $events)->with('eventCount', $eventCount)
        ->with('participants', $participants)->with('participantsCount', $participantsCount)
        ->with('users', $users)->with('usersCount', $usersCount)
        ->with('admin', $admin)->with('adminCount', $adminCount);
    }

    public function editadd($id)
{
    $events = Event::find($id);
   return view('/super.event.updateevent')->with('events', $events);
}

    public function eventadd(EventsRequest $request, $id)
{
    // Retrieve the event from the database based on the provided $id
    $event = Event::find($id);

    $input = $request->validated();
    $event->update($input);

    // Save the new event images
    if ($request->hasFile('document')) {
        foreach ($request->document as $value) {
            if ($value) { // Check if a file was uploaded
                $event_images = [
                    'document' => $value->getClientOriginalName(),
                    'hashname' => 'document/' . $value->hashName(),
                    'event_id' => $event->id
                ];

                $value->storePublicly('document', 'public');

                EventImages::create($event_images);
            }
        }
    }

    return redirect('events')->with('status', 'Event Updated!');
}
    

}
