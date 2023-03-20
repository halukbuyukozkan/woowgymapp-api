<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersonalAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('personal_access_tokens')->delete();
        
        \DB::table('personal_access_tokens')->insert(array (
            0 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2023-03-19 18:16:56',
                'expires_at' => NULL,
                'id' => 1,
                'last_used_at' => NULL,
                'name' => 'API TOKEN',
                'token' => 'b01d22ccb661901666d5e4b45238b26a995775da2a33003b22cea79d088438de',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2023-03-19 18:16:56',
            ),
        ));
        
        
    }
}