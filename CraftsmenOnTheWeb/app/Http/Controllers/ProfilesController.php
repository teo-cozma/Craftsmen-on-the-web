<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        // return view('profile');
        // $user = User::findOrFail($user);
        $profile = Profile::whereBelongsTo($user)->get();
        return view('profile', [
            'user' => $user,
            'profile' => $profile,
        ]);
    }

    // public function profile(User $user)
    // {
    //     $user = User::find($user);
    //     // dd($user);

    //     return view('profile', [
    //         'user' => $user,
    //     ]);
    // }

    // public function create() 
    // {
    //     return view('profile.create');
    // }
    
    // public function store()
    // {
    //     $data = request()->validate([
    //         'Alias' => ['string', 'max:50'],
    //         'Craft' => ['string', 'email', 'max:50'],
    //         'Motivation' => ['String'],
    //         'image' => ['image'],
    //     ]);

    //     $imagePath = request('image')->store('uploads', 'public');

    //     auth()->user()->profile()->create([
    //         'alias' => $data['Alias'],
    //         'craft' => $data['Craft'],
    //         'motivation' => $data['Motivation'],
    //         'image' => $imagePath,
    //     ]);
    // }    
}

// public function index(User $user)
// {
//     // return $this->belongsTo(User::class);
//     return view('profile', compact('user'));
// }

// public function edit(User $user)
// {
//     // return $this->belongsTo(User::class);
//     return view('profile.edit', compact('user'));
// }