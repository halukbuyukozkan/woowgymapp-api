<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GeneralsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('generals')->delete();
        
        \DB::table('generals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'weight' => 65,
                'height' => 183,
                'gender' => 'male',
                'job' => 'developer',
                'age' => 25,
                'created_at' => '2023-03-18 18:40:38',
                'updated_at' => '2023-03-18 18:40:38',
            ),
        ));
        
        
    }
}