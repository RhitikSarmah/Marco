<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return User::create([
            'name' => 'Marco Bamboo Essentials',
            'email' => 'marco@bamboo.com',
            'password' => Hash::make('password'),
        ]);  
    }
}
