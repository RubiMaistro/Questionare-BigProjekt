<?php

namespace Tests\Feature;

use App\Models\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_db()
    {
        for($i = 0; $i< 100000; $i++){
            $user = User::factory()->make();
            $user->save();
        }

        $this->assertDatabaseCount('users',100000);
    }
}
