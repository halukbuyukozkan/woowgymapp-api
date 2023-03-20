<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BodyfatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bodyfats')->delete();
        
        \DB::table('bodyfats')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'rate' => 11.2,
                'chest' => 57.6,
                'abdominal' => 4.6,
                'thigh' => 73.1,
                'bicpes' => NULL,
                'triceps' => NULL,
                'subscapular' => NULL,
                'suprailiac' => NULL,
                'created_at' => '2023-03-10 12:44:15',
                'updated_at' => '2023-03-20 11:20:41',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'rate' => 13.3,
                'chest' => 62.0,
                'abdominal' => 56.5,
                'thigh' => 59.2,
                'bicpes' => NULL,
                'triceps' => NULL,
                'subscapular' => NULL,
                'suprailiac' => NULL,
                'created_at' => '2023-03-08 07:10:17',
                'updated_at' => '2023-03-20 11:20:41',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'rate' => 13.3,
                'chest' => 43.7,
                'abdominal' => 73.1,
                'thigh' => 9.0,
                'bicpes' => NULL,
                'triceps' => NULL,
                'subscapular' => NULL,
                'suprailiac' => NULL,
                'created_at' => '2023-03-15 02:51:26',
                'updated_at' => '2023-03-20 11:20:41',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'rate' => 12.5,
                'chest' => 30.8,
                'abdominal' => 21.7,
                'thigh' => 100.0,
                'bicpes' => NULL,
                'triceps' => NULL,
                'subscapular' => NULL,
                'suprailiac' => NULL,
                'created_at' => '2023-03-18 20:43:16',
                'updated_at' => '2023-03-20 11:20:41',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'rate' => 13.2,
                'chest' => 74.0,
                'abdominal' => 74.8,
                'thigh' => 18.4,
                'bicpes' => NULL,
                'triceps' => NULL,
                'subscapular' => NULL,
                'suprailiac' => NULL,
                'created_at' => '2023-03-11 18:15:12',
                'updated_at' => '2023-03-20 11:20:41',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'rate' => 14.2,
                'chest' => 67.6,
                'abdominal' => 57.0,
                'thigh' => 65.1,
                'bicpes' => NULL,
                'triceps' => NULL,
                'subscapular' => NULL,
                'suprailiac' => NULL,
                'created_at' => '2023-03-01 08:57:46',
                'updated_at' => '2023-03-20 11:20:41',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'rate' => 13.8,
                'chest' => 91.1,
                'abdominal' => 24.0,
                'thigh' => 21.0,
                'bicpes' => NULL,
                'triceps' => NULL,
                'subscapular' => NULL,
                'suprailiac' => NULL,
                'created_at' => '2023-03-05 03:45:39',
                'updated_at' => '2023-03-20 11:20:41',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'rate' => 11.6,
                'chest' => 20.5,
                'abdominal' => 76.4,
                'thigh' => 57.7,
                'bicpes' => NULL,
                'triceps' => NULL,
                'subscapular' => NULL,
                'suprailiac' => NULL,
                'created_at' => '2023-03-16 19:43:49',
                'updated_at' => '2023-03-20 11:20:41',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'rate' => 12.6,
                'chest' => 6.7,
                'abdominal' => 68.8,
                'thigh' => 12.1,
                'bicpes' => NULL,
                'triceps' => NULL,
                'subscapular' => NULL,
                'suprailiac' => NULL,
                'created_at' => '2023-03-13 03:55:42',
                'updated_at' => '2023-03-20 11:20:41',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'rate' => 13.1,
                'chest' => 22.6,
                'abdominal' => 11.3,
                'thigh' => 22.7,
                'bicpes' => NULL,
                'triceps' => NULL,
                'subscapular' => NULL,
                'suprailiac' => NULL,
                'created_at' => '2023-03-05 14:43:31',
                'updated_at' => '2023-03-20 11:20:41',
            ),
        ));
        
        
    }
}