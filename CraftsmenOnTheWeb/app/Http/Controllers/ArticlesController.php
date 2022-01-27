<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index() {
        $title = 'Articles';
        $description = 'These are some articles. Enjoy!';
        // $data = [
        //     'product1' => 'iPhone',
        //     'product2' => 'Samsung'
        // ];
        // $articles = [
        //     'article1' => [
        //         'date' => 'Jan 2022',
        //         'title' => 'This community of makers',
        //         'author' => 'Author1',
        //         'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        //     ],
        //     'article2' => [
        //         'date' => 'Jan 2022',
        //         'title' => 'Places in Brussels for making things',
        //         'author' => 'Author2',
        //         'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        //     ]
        // ];
        // return $articles;
        return view('home', compact('description'));

        // return view('home')->with('title', $title);
        // return view('home')->with('articles', $articles);
        // return view('home')->with('data', $data);
    }
}
