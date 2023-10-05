<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileImageController extends Controller
{
    public function update(Request $request)
    {
        
        $request->validate([
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // You can customize the validation rules as per your requirements
        ]);

        if ($request->hasFile('profile_image')) {
            $user = auth()->user();

            // Delete old profile image if exists
            if ($user->profile_image) {
                Storage::disk('public')->delete($user->profile_image);
               
            }

            // Store new profile image
            $path = $request->file('profile_image')->storePublicly('profile-images', 'public');
            $user = User::find($user->id);
            $user->profile_image = $path;
            $user->save();
            
            return redirect()->back()->with('success', 'Profile image updated successfully.');
        }

        return redirect()->back()->with('error', 'Failed to update profile image.');
    }
    

}