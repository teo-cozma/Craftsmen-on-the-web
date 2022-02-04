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
        return view('articles.write');
    }
    
    public function store(Request $request)
    {
        $article = Article::create([
            'date' => $request->input('date'),
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'image' => $request->input('image'),
            'body' => $request->input('body')
        ]);
        // dd($article);
        return redirect('/home')->with('status','Article Created Successfully');
    }

    public function show(Request $request, $title)
    {   
        $article = DB::table('articles')->where('title', $title)->get();
        return view('/articles.article', compact('article'));
    }
    
    // public function edit($id)
    // {
    //     return view('articles.edit');
    // }  

    // public function update(Request $request)
    // {
    //     $article = Article::create([
    //         'date' => $request->input('date'),
    //         'title' => $request->input('title'),
    //         'author' => $request->input('author'),
    //         'image' => $request->input('image'),
    //         'body' => $request->input('body')
    //     ]);
    //     // dd($article);
    //     return redirect('/home')->with('status','Article Created Successfully');
    // }
}

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