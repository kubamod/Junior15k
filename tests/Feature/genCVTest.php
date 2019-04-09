<?php

namespace Tests\Feature;

use App\Http\Controllers\Front\IndexController;
use App\Http\Requests\GenCvRequest;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class genCVTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertInstanceOf([
            IndexController::clas
        ]);


        $response->assertStatus(200);
    }
}
