<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

use Session;


class SearchController extends Controller
{
    public function result(){
    	$search_string = request('search_string') ;

    	if(isset($search_string)){

    		$books = Book::where('name','like', '%' . $search_string . '%')->get();

    		if($books->count() != 0){
    			Session::flash('result','success');
    			Session::flash('message','Tapılan nəticələr: ' . $search_string );

    		}
    		else{
    			Session::flash('result','fail');
    			Session::flash('message','Uyğun nəticə tapılmadı');
    		}
    	}
    	else{
    		Session::flash('result','fail');
    		Session::flash('message','Nəticə tapılmadı');
    	}

    	return view('search_result', compact('books'));
    }
}
