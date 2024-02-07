<?php

namespace Database\Seeders;

use App\Models\SpecimenContainer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecimenContainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach(['Red','Blue','Brown'] as $colour) {
            SpecimenContainer::create([
                'description' => "$colour Capillary Tube",
                'colour' => $colour,
                'type' => 'Tube',
            ]);
        }
    }
}
