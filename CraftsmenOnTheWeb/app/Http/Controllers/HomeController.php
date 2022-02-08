<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $allArticles = DB::table('articles')->latest()->get();
        // $articles = Auth::user()->articles()->orderBy('created_At', 'DESC')->get();
        // dd($articles, $allArticles);
        return view('home', compact('allArticles'));
        // return view('home', compact('articles', 'allArticles'));

        
        // return view('home')->with($articles);
    }
}
