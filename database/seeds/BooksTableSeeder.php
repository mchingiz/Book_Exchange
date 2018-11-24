<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class BooksTableSeeder extends Seeder
{
    public $conditions = ["Əla","Yaxşı","Orta","Pis","Bərbad"];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('books')->truncate();
        $count = 1;
        $images = [
            'https://www.thebookdesigner.com/wp-content/uploads/2018/09/last-good-300.png',
        ];

    	foreach(range(1,30) as $index) {
	        DB::table('books')->insert([
                'user_id' => $faker->numberBetween(1,10),
                'category_id' => $faker->numberBetween(1,5),
                'city_id' => $faker->numberBetween(1,79),
                'author' => $faker->name,
                'name' => 'Book '.$index,
                'description' => $faker->text(150),
                'condition' => $this->conditions[$faker->numberBetween(0,4)],
                'year' => $faker->year(),
                'exchange_preferences' => $faker->text(150),
                'exchange_status' => $faker->numberBetween(0,2),
                'view' => $faker->numberBetween(0,1500),
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ]);

            // DB::table('images')->insert([
            //     'user_id' => $count,
	        //     'created_at' => Carbon::now(),
	        //     'updated_at' => Carbon::now(),
            // ])

            // $i++;
        }
    }
}
