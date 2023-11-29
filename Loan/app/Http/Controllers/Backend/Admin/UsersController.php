<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function allUsers()
    {   $users = User::latest()->get();
        
        return view('admin.users.all_users',compact('users'));
    }
    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect()->back()->with('success',"User  Deleted Successfully");
    }
    public function userDetail( $id){
        $user = User::find($id);
        return view('admin.users.detail',['user' => $user]);
        
        

    }
    public function toggleRole(Request $request,$id){
        $user = User::find($id);

        if ($user) {
            // Toggle the role
            $user->role = ($user->role === 'admin') ? 'user' : 'admin';
            $user->save();

            return redirect()->back()->with('success', 'Role Change successfully.');
        } else {
            return redirect()->back()->with('error', 'User not found.');
        }

    }
}
