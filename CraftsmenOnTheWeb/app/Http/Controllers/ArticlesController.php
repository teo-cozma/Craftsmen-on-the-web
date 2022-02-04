<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
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
        $article = Article::create([
            'date' => $request->input('date'),
            'title' => $request->input('title'),
            'alias' => $request->input('alias'),
            // 'image' => $request->input('image'),
            'content' => $request->input('content')
        ]);
        return redirect('/home');

        // $data = $request->validate([
        //     'date' => 'required|date',
        //     'title' => 'required|string|unique:articles|max:255',
        //     'alias' => 'required|string|max:50',
        //     'image' => 'nullable|image',
        //     'content' => 'required',
        // ]);

        // $imagePath = request('image')->store('uploads', 'public');

        // auth()->user()->articles()->create([
        //     'date' => $data['date'],
        //     'title' => $data['title'],
        //     'alias' => $data['alias'],
        //     'image' => $imagePath,
        //     'content' => $data['content'],
        // ]);

        // return redirect('/home' . auth()->user()->id);
    }
}
