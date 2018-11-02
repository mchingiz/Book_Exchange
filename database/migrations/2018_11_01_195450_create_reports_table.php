<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

         Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('report_reason_id');
            $table->integer('from_user_id');
            $table->integer('to_user_id');
            $table->string('description');
            $table->timestamps();
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('reports');
    }
}
