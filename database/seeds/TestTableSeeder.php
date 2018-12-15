<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;
use App\User;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

 



        $dev_role = Role::where('slug','admin')->first();
		$manager_role = Role::where('slug', 'user')->first();
		$dev_perm = Permission::where('slug','admin-panel')->first();
		$manager_perm = Permission::where('slug','choose-admin')->first();

		$developer = new User();
		$developer->name = 'Usama';
		$developer->surname = 'Usama';
		$developer->email = 'usama@thewebtier.com';
		$developer->password = bcrypt('secret');
		$developer->save();
		$developer->roles()->attach($dev_role);
		$developer->permissions()->attach($dev_perm);


		$manager = new User();
		$manager->name = 'Asad Butt';
		$manager->surname = 'Usama';
		$manager->email = 'asad@thewebtier.com';
		$manager->password = bcrypt('secret');
		$manager->save();
		$manager->roles()->attach($manager_role);
		$manager->permissions()->attach($manager_perm);
    }
}
