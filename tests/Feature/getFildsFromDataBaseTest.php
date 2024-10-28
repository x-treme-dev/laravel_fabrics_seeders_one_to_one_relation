<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Mark;

class getFildsFromDataBaseTest extends TestCase
{
    /**
     * A basic feature test example.
     */
     // Создать тестовые данные
     public function test_get_fields_from_database(){
        Mark::factory()->create([
            'name' => 'XC90'
          ]);
         // Получить выборку
         $marks = Mark::all();

         // Проверить наличие нужных полей
         $this->assertEquals('XC90', $marks[0]->name);
     }

}
