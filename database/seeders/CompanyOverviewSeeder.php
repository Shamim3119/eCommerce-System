<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CompanyOverview;

class CompanyOverviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        $items = [
            'Overview',
            'Medical Facilities',
            'Fire Fighting Systems',
            'Fire Hydrant System',
            'Fire Drill',
            'Workplace Safety & Compliance',
            'Day Care Center',
            'Workers Dining',
            'Employee Benefits',
        ];

        foreach ($items as $title) {
            CompanyOverview::firstOrCreate([
                'title' => $title,
            ]);
        }
    }
}
