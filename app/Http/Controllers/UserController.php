<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Alumni;


class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'email',
            'username' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function dashboard()
    {
        $totalAlumni = Alumni::count();
        $pendingAlumniCount = Alumni::where('pending', true)->count();

        return view('dashboard', compact('totalAlumni', 'pendingAlumniCount'));
    }



    public function manageAlumni()
{
    $email = Alumni::pluck('email');

    // Pass the emails variable to the view
    return view('manageAlumni', ['email' => $email]);
}

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('success', 'Login Successful. Welcome back admin!');
        }

        return redirect('/login')->withInput($request->only('username'))->withErrors([
            'password' => 'Invalid username or password. Please try again.',
        ]);
    }

    

    public function accounts()
    {
            $user = Auth::user();
            return view('accounts', ['user' => $user]);
}



public function updateAccount(Request $request)
    {
        $user = Auth::user();
    if(!$user instanceof \App\Models\User) {
        return redirect()->back()->with('error', 'Unauthorized access.');
    }
        $request->validate([
            'email' => 'required|email|unique:users,email,'.$user->id,
            'username' => 'required|unique:users,username,'.$user->id,
            'password' => 'required',
        ]);


        $user->email = $request->email;
        $user->username = $request->username;

        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->back()->with('success', 'Account updated successfully.');
    }
}
