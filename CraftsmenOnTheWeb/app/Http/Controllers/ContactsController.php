<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    // If this causes conflicts, remove this first and see what happens.
    public function create()
    {
        return view('/');
    }

    // public function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:50'],
    //         'email' => ['required', 'string', 'email', 'max:50'],
    //         'message' => ['required', 'longText', 'max:255'],
    //     ]);

    //     Contact::create($data);
    //     return back()->with('Success', 'Thank you for your message. We\'ll get back to you shortly!');
    // }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'message' => ['required'],
        ]);

        Contact::create($request->all());

        return back()->with('Success', 'Thank you for your message. We\'ll get back to you shortly!');
    }
}
