<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    public $cities = ["Ağcabədi", "Ağdam", "Ağdaş", "Ağdərə", "Ağstafa", "Ağsu", "Astara", "Bakı", "Balakən", "Beyləqan", "Bərdə", "Biləsuvar", "Cəbrayıl", "Cəlilabad", "Culfa", "Daşkəsən", "Dəliməmmədli", "Əsgəran", "Füzuli", "Gədəbəy", "Gəncə", "Goranboy", "Göyçay", "Göygöl", "Göytəpə", "Hacıqabul", "Horadiz", "Xaçmaz", "Xankəndi", "Xocalı", "Xocavənd", "Xırdalan", "Xızı", "Xudat", "İmişli", "İsmayıllı", "Kəlbəcər", "Kürdəmir", "Qax", "Qazax", "Qəbələ", "Qobustan", "Qovlar", "Quba", "Qubadlı", "Qusar", "Laçın", "Lerik", "Lənkəran", "Liman", "Masallı", "Mingəçevir", "Naftalan", "Naxçıvan", "Neftçala", "Oğuz", "Ordubad", "Saatlı", "Sabirabad", "Salyan", "Samux", "Siyəzən", "Sumqayıt", "Şabran", "Şahbuz", "Şamaxı", "Şəki", "Şəmkir", "Şərur", "Şirvan", "Şuşa", "Tərtər", "Tovuz", "Ucar", "Yardımlı", "Yevlax", "Zaqatala", "Zəngilan", "Zərdab"];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->truncate();

    	foreach($this->cities as $city) {
	        DB::table('cities')->insert([
                'name' => $city,
            ]);
        }
    }
}
