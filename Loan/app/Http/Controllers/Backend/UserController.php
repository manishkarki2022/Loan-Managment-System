<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }
    public function profile()
    {
        return view('user.profile.view');
    }
    public function updateProfile(Request $request) // Fix the parameter name to $request
    {
        $user = Auth::user();

        $request->validate([
            'name' => ['required', 'max:200'],
            'phone' => ['required', 'max:15'],
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Remove the required rule if the image is optional
        ]);

        if ($request->hasFile('image')) {
            // Delete the existing image if it exists
            if (File::exists(public_path($user->image))) {
                File::delete(public_path($user->image));
            }

            // Upload the new image
            $image = $request->image; // Fix the variable name
            $imageName = rand() . '.' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);

            $path = '/uploads/'.$imageName;

            $user->image = $path;
         
        }

        // Update other user profile information if needed

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->save();
        
        return redirect()->back()->with('success', 'Profile updated successfully');
    }
    public function viewPassword()
    {
        return view('user.password.view');
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required','current_password'],
            'password' => ['required','min:8'],
            'password_confirmation' => ['required','same:password'],
        ]);
        $request->user()->update([
            'password'=>bcrypt($request->password),
        ]);
        return redirect()->back()->with('success', 'Password updated successfully');

    }
}
