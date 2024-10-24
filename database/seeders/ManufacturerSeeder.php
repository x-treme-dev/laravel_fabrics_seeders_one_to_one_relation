<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Manufacturer::factory()->count(10)->create(); // Создает 10 записей

    }
}
