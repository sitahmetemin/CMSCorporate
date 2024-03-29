<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ahmet Emin ŞİT',
            'nick' => 'ahmetemin.sit',
            'isActive' => true,
            'email' => 'sitahmetemin@gmail.com',
            'password' => bcrypt('Ahmet.00'),
            'image' => '',
        ]);
    }
}
