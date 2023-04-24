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
            5 => 
            array (
                'id' => 11,
                'illness_type_id' => 10,
                'name' => 'Herniated disc',
                'created_at' => '2023-04-22 13:12:19',
                'updated_at' => '2023-04-22 13:16:26',
            ),
            6 => 
            array (
                'id' => 12,
                'illness_type_id' => 10,
                'name' => 'Neck hernia',
                'created_at' => '2023-04-22 13:15:16',
                'updated_at' => '2023-04-22 13:16:30',
            ),
            7 => 
            array (
                'id' => 13,
                'illness_type_id' => 10,
                'name' => 'Spinal calcification',
                'created_at' => '2023-04-22 13:16:40',
                'updated_at' => '2023-04-22 13:16:40',
            ),
            8 => 
            array (
                'id' => 14,
                'illness_type_id' => 10,
                'name' => 'Spinal slippage',
                'created_at' => '2023-04-23 09:04:19',
                'updated_at' => '2023-04-23 09:04:19',
            ),
            9 => 
            array (
                'id' => 15,
                'illness_type_id' => 10,
                'name' => 'Scoliosis',
                'created_at' => '2023-04-23 09:06:10',
                'updated_at' => '2023-04-23 09:06:10',
            ),
            10 => 
            array (
                'id' => 16,
                'illness_type_id' => 2,
                'name' => 'Osteoarthritis',
                'created_at' => '2023-04-23 09:41:09',
                'updated_at' => '2023-04-23 09:41:14',
            ),
            11 => 
            array (
                'id' => 17,
                'illness_type_id' => 2,
                'name' => 'Rheumatoid',
                'created_at' => '2023-04-23 09:43:09',
                'updated_at' => '2023-04-23 09:43:09',
            ),
            12 => 
            array (
                'id' => 18,
                'illness_type_id' => 2,
                'name' => 'Arthritis',
                'created_at' => '2023-04-23 11:33:10',
                'updated_at' => '2023-04-23 11:33:10',
            ),
            13 => 
            array (
                'id' => 19,
                'illness_type_id' => 2,
                'name' => 'Gout',
                'created_at' => '2023-04-23 11:34:04',
                'updated_at' => '2023-04-23 11:34:04',
            ),
            14 => 
            array (
                'id' => 20,
                'illness_type_id' => 3,
                'name' => 'Asthma',
                'created_at' => '2023-04-23 11:37:22',
                'updated_at' => '2023-04-23 11:37:22',
            ),
            15 => 
            array (
                'id' => 21,
                'illness_type_id' => 3,
                'name' => 'Coah',
                'created_at' => '2023-04-23 11:37:30',
                'updated_at' => '2023-04-23 11:37:30',
            ),
            16 => 
            array (
                'id' => 23,
                'illness_type_id' => 3,
                'name' => 'Bronchitis',
                'created_at' => '2023-04-23 11:40:42',
                'updated_at' => '2023-04-23 11:40:42',
            ),
            17 => 
            array (
                'id' => 24,
                'illness_type_id' => 4,
                'name' => 'Type 1',
                'created_at' => '2023-04-23 13:09:13',
                'updated_at' => '2023-04-23 13:09:13',
            ),
            18 => 
            array (
                'id' => 25,
                'illness_type_id' => 4,
                'name' => 'Type 2',
                'created_at' => '2023-04-23 13:09:23',
                'updated_at' => '2023-04-23 13:09:23',
            ),
            19 => 
            array (
                'id' => 26,
                'illness_type_id' => 5,
                'name' => 'Alzheimer',
                'created_at' => '2023-04-23 13:10:19',
                'updated_at' => '2023-04-23 13:10:19',
            ),
            20 => 
            array (
                'id' => 27,
                'illness_type_id' => 5,
                'name' => 'Parkinson',
                'created_at' => '2023-04-23 13:10:37',
                'updated_at' => '2023-04-23 13:10:37',
            ),
            21 => 
            array (
                'id' => 28,
                'illness_type_id' => 5,
                'name' => 'Demantia',
                'created_at' => '2023-04-23 13:10:56',
                'updated_at' => '2023-04-23 13:10:56',
            ),
            22 => 
            array (
                'id' => 29,
                'illness_type_id' => 6,
                'name' => 'House dust mite allergy',
                'created_at' => '2023-04-23 13:14:23',
                'updated_at' => '2023-04-23 13:14:23',
            ),
            23 => 
            array (
                'id' => 30,
                'illness_type_id' => 6,
                'name' => 'Hay fever',
                'created_at' => '2023-04-23 13:16:46',
                'updated_at' => '2023-04-23 13:16:46',
            ),
            24 => 
            array (
                'id' => 31,
                'illness_type_id' => 6,
                'name' => 'Pet dander allergy',
                'created_at' => '2023-04-23 13:17:02',
                'updated_at' => '2023-04-23 13:17:02',
            ),
            25 => 
            array (
                'id' => 32,
                'illness_type_id' => 6,
                'name' => 'Food allergy',
                'created_at' => '2023-04-23 13:17:15',
                'updated_at' => '2023-04-23 13:17:15',
            ),
            26 => 
            array (
                'id' => 33,
                'illness_type_id' => 7,
                'name' => 'Depression',
                'created_at' => '2023-04-23 13:20:43',
                'updated_at' => '2023-04-23 13:20:43',
            ),
            27 => 
            array (
                'id' => 34,
                'illness_type_id' => 7,
                'name' => 'Burnout',
                'created_at' => '2023-04-23 13:20:54',
                'updated_at' => '2023-04-23 13:20:54',
            ),
            28 => 
            array (
                'id' => 35,
                'illness_type_id' => 7,
                'name' => 'Bipolar disorder',
                'created_at' => '2023-04-23 13:21:17',
                'updated_at' => '2023-04-23 13:21:17',
            ),
            29 => 
            array (
                'id' => 36,
                'illness_type_id' => 7,
                'name' => 'Schizophrenia',
                'created_at' => '2023-04-23 13:21:44',
                'updated_at' => '2023-04-23 13:21:44',
            ),
            30 => 
            array (
                'id' => 37,
                'illness_type_id' => 8,
                'name' => 'Restless bowel syndrome',
                'created_at' => '2023-04-23 13:23:34',
                'updated_at' => '2023-04-23 13:23:34',
            ),
            31 => 
            array (
                'id' => 38,
                'illness_type_id' => 8,
                'name' => 'Ulcerative colitis',
                'created_at' => '2023-04-23 13:23:47',
                'updated_at' => '2023-04-23 13:23:47',
            ),
            32 => 
            array (
                'id' => 39,
                'illness_type_id' => 8,
                'name' => 'Crohn\'s disease',
                'created_at' => '2023-04-23 13:23:59',
                'updated_at' => '2023-04-23 13:23:59',
            ),
            33 => 
            array (
                'id' => 40,
                'illness_type_id' => 9,
                'name' => 'Breast cancer',
                'created_at' => '2023-04-23 13:24:51',
                'updated_at' => '2023-04-23 13:24:51',
            ),
            34 => 
            array (
                'id' => 41,
                'illness_type_id' => 9,
                'name' => 'Prostate cancer',
                'created_at' => '2023-04-23 13:25:03',
                'updated_at' => '2023-04-23 13:25:03',
            ),
            35 => 
            array (
                'id' => 42,
                'illness_type_id' => 9,
                'name' => 'Colon cancer',
                'created_at' => '2023-04-23 13:25:14',
                'updated_at' => '2023-04-23 13:25:14',
            ),
            36 => 
            array (
                'id' => 43,
                'illness_type_id' => 9,
                'name' => 'Lung cancer',
                'created_at' => '2023-04-23 13:25:25',
                'updated_at' => '2023-04-23 13:25:25',
            ),
        ));
        
        
    }
}