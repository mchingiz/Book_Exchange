<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class BookCategoryPreferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('book_category_preferences')->truncate();

    	foreach(range(1,20) as $index) {
	        DB::table('book_category_preferences')->insert([
                'book_id' => $faker->numberBetween(1,30),
                'category_id' => $faker->numberBetween(1,5),
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ]);
        }
    }
}
