<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function users()
    {
        $users = User::paginate(5);
        return view ('admin.user.user')->with('users', $users);

    }

    public function useredit(Request $request, $id)
    {
        $users = User::find($id);
        return view('admin.user.useredit')->with('users', $users);
    }



    public function userup(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('username');
        $users->usertype = $request->input('usertype');
        $users->update();


        return redirect('/users')->with('status','The Data is Updated!');
        
    }

    public function userdelete($id)
    {

         $users = User::findOrFail($id);
         $users->delete();
         return redirect('/users')->with('status','The Data is Delete!'); 

    }

    
    public function usershow(string $id)
    {
        $users = User::find($id);
        return view('admin.user.userview')->with('users', $users);
    }
   

}
