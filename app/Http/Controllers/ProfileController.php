<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function showUpdateForm()
    {
        return view('profile.partials.update-profile-information-form');
    }

    public function showDeleteForm()
    {
        return view('profile.partials.delete-user-form');
    }

    public function showPasswordForm()
    {
        return view('profile.partials.update-password-form');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:8|confirmed', // Added validation for password
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('profile.edit')->with('status', 'Profile updated successfully.');
    }

    public function destroy()
    {
        $user = Auth::user();
        $user->delete();

        return redirect('/')->with('status', 'Account deleted successfully.');
    }
}
