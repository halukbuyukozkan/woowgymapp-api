<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'haluk',
                'email' => 'halukbuyukozkan@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iorf6lzGWzwFY5QuttegIOwEPQcZVLX9Up7nHfI8Evd0kWldrgU12',
                'remember_token' => NULL,
                'created_at' => '2023-03-14 20:46:01',
                'updated_at' => '2023-03-14 20:46:01',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'testuser',
                'email' => 'test@test.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iWFQee9aTbx.pkOIqjpNoOZuU4RuO9iN3HefMUMr6cFxEThCgJJM2',
                'remember_token' => NULL,
                'created_at' => '2023-03-20 10:50:30',
                'updated_at' => '2023-03-20 10:50:30',
            ),
        ));
        
        
    }
}