<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\task;

use function PHPUnit\Framework\assertJsonFileEqualsJsonFile;

class TaskTest extends TestCase

{

    use RefreshDatabase;
    /**
     * @test
     */
    public function 一覧を取得出来る()
    {
        $tasks = Task::factory()->count(10)->create();

        $response = $this->getJson('api/tasks');
        dd($response);

        $response
            ->assertOk()
            ->assertJsonCount($tasks->count());
    }

    /**
     * @test
     */

    public function 登録することが出来る()
    {
        $data = [
            'title' => 'テスト投稿'
        ];

        $response = $this->postJson('api/tasks', $data);


        $response
            ->assertSCreated(201)
            ->assertJsonFragment($data);
    }
}
