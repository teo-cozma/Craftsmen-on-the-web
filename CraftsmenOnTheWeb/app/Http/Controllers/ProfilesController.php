<?php

namespace App\Http\Controllers;
use Auth;
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
    
    public function edit($id)
    {
        return view('profiles.edit');
    }   

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'mimes:jpg,png,jpeg,webp',
            'alias' => 'required|max:50',
            'craft' => 'required|max:50',
            'motivation' => 'required'
        ]);

        $imagePath = (request('image')->store('/', 'public'));

        $profile = [
            'image' => $imagePath,
            'alias' => $request->input('alias'),
            'craft' => $request->input('craft'),
            'motivation' => $request->input('motivation'),
        ];

        auth()->user()->profile()->create($profile);
        // dd($profile);
        return redirect('/profile')->with('status','Profile Created Successfully');
    }

    public function update(Request $request, $id)
    {
        if(request('image')) {
            $imagePath = (request('image')->store('/articles', 'public'));
        }

        $profile = Auth::user()->profile->update([
            'image' => $imagePath,
            'alias' => $request->input('alias'),
            'craft' => $request->input('craft'),
            'motivation' => $request->input('motivation'),
        ]);

        
        // dd($profile);
        return redirect('/profile')->with('status','Profile Updated Successfully');
    }
}