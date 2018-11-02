<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('reports')->truncate();

    	foreach(range(1,30) as $index) {
            $from = $faker->numberBetween(1,10);
            $to = $faker->numberBetween(1,10);

            while($from == $to){
                $to = $faker->numberBetween(1,10);
            }

	        DB::table('reports')->insert([
                'report_reason_id' => $faker->numberBetween(1,3),
                'from_user_id' => $from,
                'to_user_id' => $to,
                'description' => $faker->text(150),
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ]);
        }
    }
}
