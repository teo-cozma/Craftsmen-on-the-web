<?php

namespace App\Http\Controllers;
use Auth;
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
        $request->validate([
            'date' => 'required',
            'title' => 'required|max:50',
            'author' => 'required|max:50',
            'image' => 'mimes:jpg,png,jpeg,webp|nullable',
            'body' => 'required'
        ]); 

        if(request('image')) {
            $imagePath = (request('image')->store('/articles', 'public'));
        }

        $article = [
            'date' => $request->input('date'),
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'image' => $imagePath,
            'body' => $request->input('body')
        ];

        auth()->user()->articles()->create($article);
        // dd($article);
        return redirect('/home')->with('status','Article Created Successfully');
    }

    public function show(Request $request, $title)
    {   
        $article = DB::table('articles')->where('title', $title)->get();
        return view('articles.article', compact('article'));
    }

    public function edit($title)
    {
        $article = Auth::user()->articles()->where('title', $title)->get()->first();
        return view('articles.edit', compact('article'));
    }  
    
    public function update(Request $request, $title)
    {
        $article = Auth::user()->articles()->where('title', $title)->get()->first();
        
        $article->update([
            'date' => $request->input('date'),
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'image' => '',
            'body' => $request->input('body')
        ]);
        if(request('image')) {
            $imagePath = (request('image')->store('/articles', 'public'));
        }
        // dd($article);
        return redirect('/home');
    }

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
//     'body' => 'required',
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

// $article->validate([
//     'date' => $request->input('date'),
//     'title' => $request->input('title'),
//     'author' => $request->input('author'),
//     'image' => $imagePath,
//     'body' => $request->input('body')
// ]);

// public function store(Request $request) - OLD METHOD 
    // {
    //     $request->validate([
    //         'date' => 'required',
    //         'title' => 'required|max:50',
    //         'author' => 'required|max:50',
    //         'image' => 'mimes:jpg,png,jpeg,webp',
    //         'body' => 'required'
    //     ]);
        
    //     $imagePath = (request('image')->store('/articles', 'public'));

    //     $article = Article::create([
    //         'date' => $request->input('date'),
    //         'title' => $request->input('title'),
    //         'author' => $request->input('author'),
    //         'image' => $imagePath,
    //         'body' => $request->input('body')
    //     ]);
    //     // dd($article);
    //     return redirect('/home')->with('status','Article Created Successfully');
    // }

    // public function edit($title)
    // {
    //     $article = DB::table('articles')->where('title', $title)->get();
    //     return view('/articles.edit', compact('article'));

    //     // $article = Article::find($title);
    //     // dd($article->first()->author);
    // }  