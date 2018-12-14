<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolesPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    		DB::table('roles_permissions')->truncate();

        	DB::table('roles_permissions')->insert([
           
                'role_id' => '1',
                'permission_id' => '3',
	   
            ]);

            DB::table('roles_permissions')->insert([
           
                'role_id' => '1',
                'permission_id' => '1',
	           
            ]);


            DB::table('roles_permissions')->insert([
           
                'role_id' => '2',
                'permission_id' => '1',
	            
            ]);

            DB::table('roles_permissions')->insert([
           
                'role_id' => '3',
                'permission_id' => '2',
	            
            ]);
    
    }
}
