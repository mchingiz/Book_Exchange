<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    protected $fillable = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function image(){
        return $this->hasMany(Image::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function offers(){
        return $this->hasMany(Offer::class,'offered_to_book_id');
    }
}
