<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users') -> insert([
            'name' => 'administrator',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
            'is_admin' => 1,
        ]);
    }
}
