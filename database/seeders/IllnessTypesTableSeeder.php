<?php

namespace Database\Seeders;

use App\Models\IllnessType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IllnessTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $types = [
                ['name' => 'Cardiovascular diseases'],
                ['name' => 'Bone and joint diseases'],
                ['name' => 'Respiratory diseases'],
                ['name' => 'Diabetes'],
                ['name' => 'Neurological diseases'],
                ['name' => 'Allergies'],
                ['name' => 'Mental diseases'],
                ['name' => 'Gastrointestinal diseases'],
                ['name' => 'Cancer diseases'],
                ['name' => 'Spinal disorders']
            ];

            foreach ($types as $type) {
                IllnessType::create($type);
            }
        }
    }
}
