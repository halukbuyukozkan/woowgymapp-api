<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'created_at' => '2023-03-19 11:27:30',
                'guard_name' => 'web',
                'id' => 1,
                'name' => 'system_settings',
                'updated_at' => '2023-03-19 11:27:30',
            ),
        ));
        
        
    }
}