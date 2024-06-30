<?php

namespace App\Http\Controllers;

use App\Models\User_Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    //
    public function view()
    {
        $student_id = Auth::user()->student_number;
        $l_name = Auth::user()->last_name;
        $f_name = Auth::user()->first_name;
        $m_name = Auth::user()->middle_name;
        $b_date = Auth::user()->birth_date;
        $address = Auth::user()->address;
        $contact = Auth::user()->contact_number;
        $photo = Auth::user()->photo;


        return view('portal', compact('student_id', 'l_name', 'f_name', 'm_name', 'b_date', 'address', 'contact', 'photo'));
    }

    public function index()
    {
        return view('login');
    }

    public function toRegister()
    {
        return view('register');
    }
    public function registerData(Request $request)
    {
        $validatedData = $request->validate([
            'snumber' => 'required|digits_between:1,10',
            'lname' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'mname' => 'required|string|max:255',
            'bdate' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'contact' => 'required|string|max:15',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Move the file to the public/uploads directory
            $file->move(public_path('uploads'), $fileName);

            // Create the user profile record
            User_Profile::create([
                'student_number' => $validatedData['snumber'],
                'last_name' => $validatedData['lname'],
                'first_name' => $validatedData['fname'],
                'middle_name' => $validatedData['mname'],
                'birth_date' => $validatedData['bdate'],
                'address' => $validatedData['address'],
                'contact_number' => $validatedData['contact'],
                'email' => $validatedData['snumber'],
                'password' => Hash::make($validatedData['lname']),
                'photo' => $fileName,
            ]);

            return redirect('register')->with('success', 'Registration Successful!');
        }

        return redirect('register')->with('error', 'Photo upload failed.');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/view')->with('success', 'Login successful');
        }

        return back()->with('error', 'Incorrect student number or password');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
