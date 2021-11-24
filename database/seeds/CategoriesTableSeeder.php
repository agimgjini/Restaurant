<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Ποτά'
            ],
            [
                'name' => 'Ορεκτικά'
            ],
            [
                'name' => 'Σαλάτες'
            ],
            [
                'name' => 'Μαγειρευτά'
            ],
            [
                'name' => 'Της Ώρας'
            ],
            [
                'name' => 'Specials'
            ]
        ]);
    }
}
