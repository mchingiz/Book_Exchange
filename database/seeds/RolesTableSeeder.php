<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->truncate();


        DB::table('roles')->insert([
           
                'slug' => 'super-admin',
                'name' => 'Super Admin',
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ]);

        DB::table('roles')->insert([
           
                'slug' => 'admin',
                'name' => 'Admin',
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ]);

        DB::table('roles')->insert([
           
                'slug' => 'user',
                'name' => 'User',
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ]);
    }
}
