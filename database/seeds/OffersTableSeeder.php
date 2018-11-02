<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('offers')->truncate();

    	foreach(range(1,30) as $index) {
            $from = $faker->numberBetween(1,30);
            $to = $faker->numberBetween(1,30);

            while($from == $to){
                $to = $faker->numberBetween(1,30);
            }

	        DB::table('offers')->insert([
                'offered_to_book_id' => $to,
                'offered_book_id' => $from,
                'status' => $faker->numberBetween(0,1),
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ]);
        }
    }
}
