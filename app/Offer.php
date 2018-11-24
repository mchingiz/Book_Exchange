<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
	protected $fillable = ["offered_book_id","offered_to_book_id"];
    
    public function offered_to_book(){
        return $this->belongsTo(Book::class,'offered_to_book_id');
    }

    public function offered_book(){
        return $this->belongsTo(Book::class,'offered_book_id');
    }
}
