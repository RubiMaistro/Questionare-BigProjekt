<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{

    public function test_user_exist()
    {
        $user = User::create([
            'name' => 'test',
            'email' => 'test@test_email.com',
            'password' => Hash::make('testest'),
        ]);

        $user = User::where('name', '=', 'test')->get()->all();

        $this->assertEquals('test', $user->name);
    }

    public function test_see_questionare_list()
    {
        $response = $this->get('/questionnaires');

        $response->assertStatus(200);
        $response->assertSee('List');
        $response->assertDontSee('Create');
    }

}
