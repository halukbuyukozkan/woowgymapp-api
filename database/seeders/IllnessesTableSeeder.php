<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IllnessesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('illnesses')->delete();
        
        \DB::table('illnesses')->insert(array (
            0 => 
            array (
                'id' => 3,
                'illness_type_id' => 1,
                'name' => 'Hipertansiyon',
                'created_at' => '2023-04-20 13:38:52',
                'updated_at' => '2023-04-20 13:38:52',
            ),
            1 => 
            array (
                'id' => 4,
                'illness_type_id' => 1,
                'name' => 'Hipotansiyon',
                'created_at' => '2023-04-20 13:39:19',
                'updated_at' => '2023-04-20 13:39:19',
            ),
            2 => 
            array (
                'id' => 5,
                'illness_type_id' => 1,
                'name' => 'Damar Sertliği',
                'created_at' => '2023-04-20 13:39:30',
                'updated_at' => '2023-04-20 13:39:30',
            ),
            3 => 
            array (
                'id' => 6,
                'illness_type_id' => 1,
                'name' => 'Kalp Yetmezliği',
                'created_at' => '2023-04-20 13:39:37',
                'updated_at' => '2023-04-20 13:39:37',
            ),
            4 => 
            array (
                'id' => 7,
                'illness_type_id' => 1,
                'name' => 'Kardiyak Aritmiler',
                'created_at' => '2023-04-20 13:39:46',
                'updated_at' => '2023-04-20 13:39:46',
            ),
        ));
        
        
    }
}