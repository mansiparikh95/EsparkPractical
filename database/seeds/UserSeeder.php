<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Mansi',
            'email' => 'mansi@mailinator.com',
            'password' => Hash::make('admin@123'),
        ]);
    }
}
