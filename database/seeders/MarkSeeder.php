<?php

namespace Database\Seeders;
use App\Models\Mark;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 
        $manufacturers = [
            ['name' => 'XC90'],
            ['name' => 'S60'],
            ['name' => 'XXSe 6'],
            // Добавьте остальные элементы массива по мере необходимости
        ];

        foreach ($manufacturers as $manufacturer) {
            Mark::create($manufacturer);
        } 
    }
}
