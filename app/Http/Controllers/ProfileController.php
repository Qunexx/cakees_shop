<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function profile()
    {
        $profile = auth()->user()->profile;
        return view('user.UserAccount', ['profile' => $profile]);
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'phone_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'delivery_options' => 'required|string',
            'payment_methods' => 'required|string',
        ]);

        $profile = auth()->user()->profile;
        if (!$profile) {
            $profile = new Profile();
            $profile->user_id = auth()->id();
        }

        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->middle_name = $request->middle_name;
        $profile->phone_number = $request->phone_number;
        $profile->address = $request->address;
        $profile->delivery_options = $request->delivery_options;
        $profile->payment_methods = $request->payment_methods;
        $profile->save();

        return response()->json(['success' => true, 'message' => 'Profile updated successfully.']);
    }
}
