<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(ReportReasonsTableSeeder::class);
        $this->call(ReportsTableSeeder::class);
        $this->call(RatingsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(OffersTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
        $this->call(BookCategoryPreferencesTableSeeder::class);
    }
}
