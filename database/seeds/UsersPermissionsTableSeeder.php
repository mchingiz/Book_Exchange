<?php

use Illuminate\Database\Seeder;

class UsersPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        	DB::table('users_permissions')->truncate();

        	DB::table('users_permissions')->insert([
           
                'user_id' => '1',
                'permission_id' => '3',
	  
            ]);

            DB::table('users_permissions')->insert([
           
                'user_id' => '1',
                'permission_id' => '1',
	        
            ]);

            DB::table('users_permissions')->insert([
           
                'user_id' => '2',
                'permission_id' => '1',
	           
            ]);

            foreach(range(3,13) as $index) {
		        
	            DB::table('users_permissions')->insert([
	           
	                'user_id' => $index,
	                'permission_id' => '2',
		         
	            ]);
	        }
	    }

            
}
