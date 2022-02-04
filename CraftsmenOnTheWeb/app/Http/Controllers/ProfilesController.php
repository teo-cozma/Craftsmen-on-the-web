<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profiles.profile');
    }
    
    // public function edit(User $user)
    // {
    //     return view('profiles.edit', compact('user'));
    // }   
    public function edit($id)
    {
        $profile = User::find($id);
        return view('profiles.edit', compact('profile'));
    }   

    public function update(Request $request, $id)
    {
        $profile = Profile::where('id', $id)->update([
            // 'image' => $request->input('image'),
            'alias' => $request->input('alias'),
            'craft' => $request->input('craft'),
            'motivation' => $request->input('motivation'),
        ]);

        return redirect('/profile');
    }
}