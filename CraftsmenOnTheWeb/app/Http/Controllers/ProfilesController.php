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
        $profile = [
            'image' => $request->input('image'),
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
        $profile = Auth::user()->profile->update([
            'image' => $request->input('image'),
            'alias' => $request->input('alias'),
            'craft' => $request->input('craft'),
            'motivation' => $request->input('motivation'),
        ]);

        return redirect('/profile')->with('status','Profile Updated Successfully');
    }
}
    // $profile = Profile::find($id);
    // return view('profiles.edit', compact('profile'));

    // public function update(Request $request, $id)
    // {
    //     $profile = Profile::where('id', $id)->update([
    //         // 'image' => $request->input('image'),
    //         'alias' => $request->input('alias'),
    //         'craft' => $request->input('craft'),
    //         'motivation' => $request->input('motivation'),
    //     ]);

    //     return redirect('/profile');
    // }

    // $profile->Alias = Auth::user()->profile->Alias;
    // $profile->Alias = Auth::user()->profile->Alias;
    // return redirect('/profile')->with('status','Profile Updated Successfully');
    // dd($profile);

    // $profile->alias = $request->input('alias');
    // $profile->craft = $request->input('craft');
    // $profile->motivation = $request->input('motivation');
    // $profile->update();
    // return redirect()->back()->with('status','Profile Updated Successfully');