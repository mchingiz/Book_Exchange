<?php

use Illuminate\Database\Seeder;

class UsersRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users_roles')->truncate();

        	DB::table('users_roles')->insert([
           
                'user_id' => '1',
                'role_id' => '1',
	  
            ]);

            DB::table('users_roles')->insert([
           
                'user_id' => '1',
                'role_id' => '2',
	        
            ]);

            DB::table('users_roles')->insert([
           
                'user_id' => '1',
                'role_id' => '3',
	           
            ]);


            DB::table('users_roles')->insert([
           
                'user_id' => '2',
                'role_id' => '2',
	  
            ]);

            DB::table('users_roles')->insert([
           
                'user_id' => '2',
                'role_id' => '3',
	        
            ]);

            

            foreach(range(3,13) as $index) {
		        
	            DB::table('users_roles')->insert([
	           
	                'user_id' => $index,
	                'role_id' => '3',
		         
	            ]);
	        }

    }
}
