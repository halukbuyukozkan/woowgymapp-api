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
                'created_at' => NULL,
                'email' => 'halukbuyukozkan@gmail.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'Haluk',
                'password' => '$2y$10$MgNBQqpJikqglNN2KUcb4eLaSyfKV359dX74wGdIl.YsZdaarmxTy',
                'remember_token' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}