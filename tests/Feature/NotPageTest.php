<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NotPageTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_it_returns_404_for_non_existent_page()
    {
        // Получить доступ к несуществующему маршруту
        $response = $this->get('/non-existent-page');

        // Проверить, что статус ответа 404
        $response->assertStatus(404);
    }
}
