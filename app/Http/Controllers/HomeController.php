<?php

namespace App\Http\Controllers;

use App\Book;
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
        $books = Book::all();

        $images = [
            'img/books/4.png',
            'img/books/4.gif',
            'img/books/3.jpg',
            'img/books/1.jpg',
            'img/books/5.gif'
        ];

        foreach($books as $index => $book){
            $book->image = $images[$index%5];
        }

        return view('index',compact('books'));
    }
}
