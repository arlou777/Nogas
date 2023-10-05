<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Http\Requests\ParticipantRequest;
use App\Models\Participant;

class ParticipantController extends Controller
{
    public function addpar()
    {
        
        return view ('user.participant.addpart');

    }
    public function addedpart(Request $request)
    {   
        

        $input = $request->all();


        $existingParticipant = Participant::where('user_id', auth()->user()->id)
        ->where('events_id', $input['events_id'])
        ->first();

        if ($existingParticipant) {
        return redirect()->back()->with('error', 'You have already participated in this event.');
    }


        if (!Event::where('id', $input['events_id'])->exists()) {
            return redirect()->back()->with('error', 'The event ID does not exist.');
        }
        $input['user_id'] = auth()->user()->id;
        if (!User::where('id', $input['user_id'])->exists()) {
            return redirect()->back()->with('error', 'The User ID does not exist.');
        }
       

        if ($request->hasFile('documents')) {
            $file = $request->file('documents');
        
            // Set the path for storing the file
            $input['documents'] = 'documents/' . $file->hashName();
        
            // Store the file in the specified directory
            $file->storePublicly('documents', 'public');
        }
        
        // Create the Participant model
        Participant::create($input);
        
        return redirect('/participant')->with('status', 'Your Added!');

    }

    public function views()
        {
            $user = auth()->user(); 
            $participants = Participant::where('user_id', $user->id)
            ->orderBy('created_at', 'desc') 
            ->paginate(5);
            return view ('user.participant.participants')->with('participants', $participants);

        }

        public function shows(string $id)
        {
            $participants = Participant::find($id);
            return view('user.participant.show')->with('participants', $participants);
        }    


        
        public function edit($id)
        {
            $participants = Participant::find($id);
            return view('user.participant.update')->with('participants', $participants);
        }

        public function updated(Request $request,  $id)
        {
            

            $participants = Participant::findOrfail($id);
        if( !is_null($participants->documents)){
            Storage::disk('public')->delete($participants->documents);
        }
        $participants->documents = $request->file('documents')->storePublicly('documents', 'public');
        $participants->save(); 

        $input = $request->all();
        if (!Event::where('id', $input['events_id'])->exists()) {
            return redirect()->back()->with('error', 'Event ID does not exists.');
               }
        $file = $request->file('documents');

        $input['documents'] =  'documents/'. $file->hashName();

        $file->storePublicly('documents', 'public');

        $participants->update($input);
            return redirect('/participant')->with('status', 'Participant Updated!');  
        }

        public function deleted($id)
        {
             $participants = Participant::find($id);
             $participants->delete();
             return redirect('/participant')->with('status','The Data is Deleted!'); 
    
        }


        public function showevents($events_id)
    {
        $events = Event::where('id', $events_id)->get();
        return view('user.participant.viewevents')->with('events', $events);
    }

    
    }
