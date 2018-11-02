<?php

use Illuminate\Database\Seeder;

class ReportReasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('report_reasons')->truncate();

    	DB::table('report_reasons')->insert([
            'name' => 'Kitabın vəziyyəti elanda göstərilən kimi deyil',
        ]);

    	DB::table('report_reasons')->insert([
            'name' => 'Kitabın ili elanda göstərilən kimi deyil',
        ]);

    	DB::table('report_reasons')->insert([
            'name' => 'Kitab elanda göstərilən deyil',
        ]);
    }
}
