<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Donát Fehér',
            'email' => 'donat.feher@admin.com',
            'password' => bcrypt('admin123')
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Fehér Edvárd',
            'email' => 'feheredvard@gmail.com',
            'password' => bcrypt('user123')
        ]);
    }
}
