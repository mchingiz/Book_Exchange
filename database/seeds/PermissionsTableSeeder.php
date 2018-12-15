<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

            DB::table('permissions')->truncate();

          	DB::table('permissions')->insert([
           
                'slug' => 'admin-panel',
                'name' => 'Admin Panel',
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ]);


          	DB::table('permissions')->insert([
           
                'slug' => 'book-crud',
                'name' => 'Book CRUD',
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ]);


            DB::table('permissions')->insert([
           
                'slug' => 'choose-admin',
                'name' => 'Choose Admin',
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ]);


          


    }
}
