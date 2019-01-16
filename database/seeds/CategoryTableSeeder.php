<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\categories::insert([
            'name' => 'Dota'
        ]);

        \App\categories::insert([
            'name' => 'Mobile Legend'
        ]);
    }
}
