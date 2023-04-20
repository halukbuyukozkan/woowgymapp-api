<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IllnessTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('illness_types')->delete();
        
        \DB::table('illness_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Cardiovascular diseases',
                'created_at' => '2023-04-20 08:05:25',
                'updated_at' => '2023-04-20 08:05:25',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Bone and joint diseases',
                'created_at' => '2023-04-20 08:05:36',
                'updated_at' => '2023-04-20 08:05:36',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Respiratory diseases',
                'created_at' => '2023-04-20 08:05:44',
                'updated_at' => '2023-04-20 08:05:44',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Diabetes',
                'created_at' => '2023-04-20 08:05:51',
                'updated_at' => '2023-04-20 08:05:51',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Neurological diseases',
                'created_at' => '2023-04-20 08:05:58',
                'updated_at' => '2023-04-20 08:05:58',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Allergies',
                'created_at' => '2023-04-20 08:06:05',
                'updated_at' => '2023-04-20 08:06:05',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Mental diseases',
                'created_at' => '2023-04-20 08:06:12',
                'updated_at' => '2023-04-20 08:06:12',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Gastrointestinal diseases',
                'created_at' => '2023-04-20 08:06:19',
                'updated_at' => '2023-04-20 08:06:19',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Cancer diseases',
                'created_at' => '2023-04-20 08:06:25',
                'updated_at' => '2023-04-20 08:06:25',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Spinal disorders',
                'created_at' => '2023-04-20 08:06:32',
                'updated_at' => '2023-04-20 08:06:32',
            ),
        ));
        
        
    }
}