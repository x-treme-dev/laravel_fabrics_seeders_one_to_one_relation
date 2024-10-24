<?php

namespace Database\Seeders;
use App\Models\Body;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BodySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Body::factory()->count(10)->create(); // Создает 10 записей
    }
}
