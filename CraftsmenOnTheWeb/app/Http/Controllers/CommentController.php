<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = $request->validate([
            'date' => 'required',
            'author' => 'required',
            'body' => 'required',
        ]);
    
        $user = auth()->user()->articles();
        // $comment = Comment::create($request->all());
        dd($comment, $user);
        
        // return redirect('/article/{article}')->with('success','Comment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Comment $comments)
    {
        $comments = DB::table('comments')->latest()->get();
        return view('articles.article', compact('comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Comment $comment)
    {
        $comment = Comment::find($id);
        return view('articles.article', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);

        $request->validate([
            'date' => 'required',
            'author' => 'required',
            'body' => 'required',
        ]);
    
        $comment->update($request->all());
     
        return redirect('/article/{article}')->with('success','Comment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('/article/{article}')->with('success','Comment deleted successfully.');
    }
}
