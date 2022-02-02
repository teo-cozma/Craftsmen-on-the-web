<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    // Is this needed ?
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('write');
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'date' => 'required|date',
            'title' => 'required|string|unique:articles|max:255',
            'alias' => 'required|string|max:50',
            'image' => 'nullable|image',
            'content' => 'required',
        ]);

        auth()->user()->articles()->create($data);
    }
}
