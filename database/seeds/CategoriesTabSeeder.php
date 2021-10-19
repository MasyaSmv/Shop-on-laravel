<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories') -> insert([
            [
                'name' => 'Телефонч',
                'code' => 'mobile',
                'description' => 'Все телефоны',
                'image' => 'categories/mobile.jpg',
            ],
            [
                'name' => 'Портативная техника',
                'code' => 'portable',
                'description' => 'Вся гарнитура',
                'image' => 'categories/portable.jpg',
            ],
            [
                'name' => 'Бытовая техника',
                'code' => 'technics',
                'description' => 'Все для куни',
                'image' => 'categories/technics.jpg',
            ],
        ]);
    }
}
