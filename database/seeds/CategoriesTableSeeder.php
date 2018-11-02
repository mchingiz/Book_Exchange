<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public $categories = ['Elmi','Romantik','Dedektiv','Tarixi','Toplu'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

    	foreach($this->categories as $category) {
	        DB::table('categories')->insert([
                'name' => $category,
            ]);
        }
    }
}
