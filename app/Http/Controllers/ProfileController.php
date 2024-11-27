<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index(): View
    {
        $user = Auth::user();
        return view('auth.profile', compact('user'));
    }

    public function edit(): View
    {
        $user = Auth::user();
        return view('auth.updateprofile', compact('user'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $user = Auth::user();
        //validate form
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'username' => 'required|string|min:3|max:255|unique:users,username,' . $user->id,
            'email' => 'required|string|email|min:3|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:3|max:255',
            'image' => 'nullable|image|max:2048', // Limit image size to 2MB
        ]);

        $user = User::find(Auth::user()->id);

        if ($request->hasFile('image')) {
            // Upload the new image
            $image = $request->file('image');

            // Generate a unique file name
            $imageName = time() . '-' . $image->getClientOriginalName();

            // Move the image to the public/profile folder
            $image->move(public_path('assets/profile'), $imageName);

            // Delete the old image from the public/profile folder if it exists
            if ($user->image && file_exists(public_path('assets/profile/' . $user->image))) {
                unlink(public_path('assets/profile/' . $user->image));
            }

            // Update the user's profile with the new image
            $user->update([
                'image' => $imageName,
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password ? Hash::make($request->password) : $user->password,
            ]);
        } else {
            // Update the user without changing the image
            $user->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password ? Hash::make($request->password) : $user->password,
            ]);
        }


        return redirect()->route('profile')->with(['success' => 'Profile Berhasil Diubah!']);
    }
}
