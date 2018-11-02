<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('ratings')->truncate();

    	foreach(range(1,30) as $index) {
            $from = $faker->numberBetween(1,10);
            $to = $faker->numberBetween(1,10);

            while($from == $to){
                $to = $faker->numberBetween(1,10);
            }

	        DB::table('ratings')->insert([
                'star' => $faker->numberBetween(1,5),
                'from_user_id' => $from,
                'to_user_id' => $to,
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ]);
        }
    }
}
