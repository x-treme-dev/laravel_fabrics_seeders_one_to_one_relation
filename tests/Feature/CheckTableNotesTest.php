<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Manufacturer; 

use Tests\TestCase;
 

class CheckTableNotesTest extends TestCase
{
    public function test_database_has_record()
    {
        // Создать запись в базе данных
        $this->artisan('db:seed --class=MarkSeeder'); // с помощью существующего сидера
        
        // Проверка, что запись существует в базе данных
        $this->assertDatabaseHas('marks', [
            'name' => 'XC90',
        ]);

    }



    

}
