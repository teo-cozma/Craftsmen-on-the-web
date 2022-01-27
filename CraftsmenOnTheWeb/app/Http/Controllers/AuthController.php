<?php

namespace App\Http\Controllers;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    // First-time registration
    public function registration()
    {
        $title = "Registration";
        return view('register', compact('title'));
    }

    public function registrationForm(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
        
        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Welcome fellow craftsman !');
    }


    public function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    //  Logging in as a registered user
    public function index()
    {
        $title = "Log in";
        return view('login', compact('title'));
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->withSuccess('Welcome back !');
        }
        return back()->withErrors('Verify credentials twice, enter once.');
    }

    // Log out functions
    public function signOut(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect('login');
    }
}

// https://laravel.com/docs/8.x/passwords