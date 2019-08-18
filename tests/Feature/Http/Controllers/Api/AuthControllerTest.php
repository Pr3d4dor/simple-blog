<?php

namespace Tests\Feature\Http\Controllers\Api;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function it_can_login_with_correct_credentials_and_return_token()
    {
        $response = $this->post(route('api.auth.login', [
            'email' => 'admin@admin.com',
            'password' => 'admin'
        ]));

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'access_token',
                'token_type',
                'expires_in',
            ]);
    }

    /** @test */
    public function it_cannot_login_with_incorrect_credentials()
    {
        $response = $this->post(route('api.auth.login', [
            'email' => 'admin@admin.com',
            'password' => 'wrong_password'
        ]));

        $response
            ->assertStatus(401);
    }

    /** @test */
    public function it_can_return_the_logged_user_info()
    {
        $response = $this->actingAs($this->adminUser, 'api')
            ->post(route('api.auth.me'));

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'id',
                'name',
                'email',
                'is_admin',
                'updated_at',
                'created_at',
            ]);
    }
}
