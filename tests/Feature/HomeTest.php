<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeTest extends TestCase
{

    /**
     * 対象urlにアクセス
     * ステータスコードが200かテストする
     */
    public function testStatusCode()
    {
        $response = $this->get('/home');
        $response->assertStatus(200);
    }

    /**
     * body部に文字列があることをテストする
     *
     */
    public function testBody()
    {
        $response = $this->get('/home');
        $response->assertSeeText('こんにちは！');
    }
}
