<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('users')->truncate();

    	foreach(range(1,10) as $index) {
	        DB::table('users')->insert([
	            'name' => $faker->name,
                'surname' => $faker->name,
                'image' => 'sample_image.jpg',
	            'email' => $faker->email,
	            'password' => bcrypt('123456'),
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ]);
        }
    }
}
