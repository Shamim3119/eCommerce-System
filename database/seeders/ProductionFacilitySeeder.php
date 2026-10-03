<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductionFacility;

class ProductionFacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            'Sewing Section',
            'Cutting Section',
            'C.A.D. (Computer-Aided Design)',
            'Finishing Section',
            'Fabric Inspection Machine',
            'Generator',
            'Electrical Sub-Station',
            'Air Compressor',
 
        ];

        foreach ($items as $title) {
            ProductionFacility::firstOrCreate([
                'title' => $title,
            ]);
        }
    }
}
