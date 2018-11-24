<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Book;
use App\User;
use App\Image;
use App\Category;
use App\City;
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
        $conditions = ["Əla","Yaxşı","Orta","Pis","Bərbad"];

        $categories = Category::all();

        $cities = City::all();

        return view('book.addBook',compact('categories','conditions','cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'book_name' => 'required',
            'book_author' => 'required',
            'book_desc' => 'required|',
            'book_photo' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        if($request->hasFile('book_photo')){
            $book_photo = Carbon::now()->toDateString() . '_' . request('book_photo')->getClientOriginalName();
            $folder = public_path() . '\Upload\book\\';

            request('book_photo')->move($folder, $book_photo);
        }

        if(auth()->check()){
            $book_pref = request('book_pref');

            if(strlen(request('book_pref')) == 0){
                $book_pref= "";
            }

            $book = Book::create([
                'user_id' => auth()->id(),
                'category_id' => request('book_cat'),
                'city_id' => request('book_city'),
                'author' => request('book_author'),
                'name' => request('book_name'),
                'description' => request('book_desc'),
                'condition' => request('book_condition'),
                'year' => request('book_year'),
                'exchange_preferences' => $book_pref,
                'exchange_status' => '0',
                'view' => 0
            ]);

            Image::create([
                'book_id' => $book->id,
                'source' => $book_photo

            ]);

            SESSION::FLASH('message', 'BOOK ADDED!');
            SESSION::FLASH('status', 'SUCCESS');
        }

        return redirect()->back();
    }

    public function profile(User $user){

        return view('profile',compact('user'));
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

        return view('single_book',compact('book'));
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

    public function test($id){
        $book = Book::findOrFail($id);
        return view('single_book',compact('book'));
    }
}
