<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        // $allArticles = [];
        $allArticles = DB::table('articles')->latest()->limit(2)->get();
        // dd($allArticles);
        return view('welcome', compact('allArticles'));
    }
}
