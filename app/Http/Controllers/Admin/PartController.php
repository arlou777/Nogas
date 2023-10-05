<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Event;

class PartController extends Controller
{
    public function views()
        {
         
            $participants = Participant::sortable()
        ->orderBy('created_at', 'desc') // Order by the created_at column in descending order
        ->paginate(5);
    
    $participantsCount = $participants->total(); // Total count, including pagination
    
    return view('admin.participant.participant')
        ->with('participants', $participants)
        ->with('participantsCount', $participantsCount);
        }

        public function delete($id)
        {
             $participants = Participant::find($id);
             $participants->delete();
             return redirect('/indexs')->with('status','The Data is Deleted!'); 
    
        }

        public function partedit($id)
        {
            $participants = Participant::find($id);
            //return dd($id);
            return view('admin.participant.partedit')->with('participants', $participants);
        }

        public function partupdate(Request $request, $id)
{
    $participants = Participant::findOrFail($id);

    // Check if a file was uploaded
    if ($request->hasFile('documents')) {
        // Delete the previous document, if it exists
        if (!is_null($participants->documents)) {
            Storage::disk('public')->delete($participants->documents);
        }

        // Store the new document
        $file = $request->file('documents');
        $documentPath = $file->storePublicly('documents', 'public');

        // Update the document path in the database
        $participants->documents = $documentPath;
    }

    // Update other fields if needed
    $participants->startupname = $request->input('startupname');
    $participants->problem = $request->input('problem');
    $participants->solution = $request->input('solution');
    $participants->target = $request->input('target');
    $participants->events_id = $request->input('events_id');
    $participants->user_id = $request->input('user_id');
    $participants->cert = $request->input('cert');

    // Save the participant record
    $participants->save();

    return redirect('indexs')->with('status', 'Participant Updated!');
}

        public function partsearch()
    {
        $search_text = $_GET['part'];
        $participants = Participant::where('startupname','LIKE', '%'.$search_text.'%')->get();

        return view('admin.participant.partsearch',compact('participants'));
    }


    public function show(string $id)
    {
        $participants = Participant::find($id);
        return view('admin.participant.show')->with('participants', $participants);
    }

  
}
