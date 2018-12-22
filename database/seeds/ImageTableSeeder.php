<?php

use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('books')->truncate();
        DB::table('images')->truncate();
        $count = 1;
        

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

            DB::table('images')->insert([
                'book_id' => $index,
                'source' => rand(1,10).'.jpg',
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
            ])

            // $i++;
        }
    }
}
