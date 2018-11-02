<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('notifications')->truncate();

    	foreach(range(1,20) as $index) {
	        DB::table('notifications')->insert([
                'user_id' => $faker->numberBetween(1,10),
                'offer_id' => $faker->numberBetween(1,30),
                'type' => $faker->numberBetween(1,3),
                'status' => $faker->numberBetween(0,1),
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ]);
        }
    }
}
