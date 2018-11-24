<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    // protected $fillable = ['user_id','category_id','city_id','author','name','description','condition','year','exchange_preferences','exchange_status','view'];

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }
}
