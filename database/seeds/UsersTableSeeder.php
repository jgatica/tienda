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
        User::create([
            'name'     => 'Gladys',
            'email'    => 'gladys@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
