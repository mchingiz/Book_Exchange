<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::paginate(9);

        
        // $books = $books->paginate(6);

        return view('index',compact('books'));
    }
}
