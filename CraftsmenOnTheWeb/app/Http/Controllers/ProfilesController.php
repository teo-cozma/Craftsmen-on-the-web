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
        $profile = $request->validate([
            'image' => 'mimes:jpg,png,jpeg,webp',
            'alias' => 'required|max:50',
            'craft' => 'required|max:50',
            'motivation' => 'required'
        ]);

        if(request('image')) {
            $newImageName = time() . '-' . $request->alias . '.' .$request->image->extension();
            $request->image->move(public_path('img'), $newImageName);
        }

        $profile = [
            'image' => $newImageName,
            'alias' => $request->input('alias'),
            'craft' => $request->input('craft'),
            'motivation' => $request->input('motivation'),
        ];

        auth()->user()->profile()->create($profile);
        // dd($profile);
        return redirect('/profile')->with('status','Profile Created Successfully');
    }

    public function update(Request $request, $profile)
    {
        $profile = $request->validate([
            'image' => 'mimes:jpg,png,jpeg,webp',
            'alias' => 'required',
            'craft' => 'required',
            'motivation' => 'required'
        ]);

        if(request('image')) {
            $newImageName = time() . '-' . $request->alias . '.' .$request->image->extension();
            $request->image->move(public_path('img'), $newImageName);

            $profile = [
                'image' => $newImageName,
                'alias' => $request->input('alias'),
                'craft' => $request->input('craft'),
                'motivation' => $request->input('motivation'),
            ];
        }

        // dd($profile);
        auth()->user()->profile()->update($profile);
        return redirect('/profile')->with('status','Profile Updated Successfully');
    }
}