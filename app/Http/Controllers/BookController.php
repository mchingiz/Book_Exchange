<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Book;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class BookController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $books = Book::all();

        return view('backEnd.book.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.book.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Book::create($request->all());

        Session::flash('message', 'Book added!');
        Session::flash('status', 'success');

        return redirect('books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('backEnd.book.books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);

        return view('backEnd.book.books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $book = Book::findOrFail($id);
        $book->update($request->all());

        Session::flash('message', 'Book updated!');
        Session::flash('status', 'success');

        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);

        $book->delete();

        Session::flash('message', 'Book deleted!');
        Session::flash('status', 'success');

        return redirect('books');
    }

}
