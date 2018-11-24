<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->integer('city_id');
            $table->string('author');
            $table->string('name');
            $table->string('description');
            $table->string('condition');
            $table->integer('year');
            $table->string('exchange_preferences');
            $table->string('exchange_status');
            $table->integer('view');
            $table->timestamps();
           
        });
    }
    
    public function down()
    {
        //
        Schema::dropIfExists('books');
    }
}
