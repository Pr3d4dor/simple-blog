<?php

namespace Tests\Feature\Http\Controllers\Web;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function login_displays_the_login_form()
    {
        $response = $this->get(route('login'));

        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    }

    /** @test */
    public function login_displays_validation_errors()
    {
        $response = $this->post('/login', []);

        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
    }

    /** @test */
    public function login_authenticates_and_redirects_user()
    {
        $user = factory(User::class)->create();

        $response = $this->post(route('login'), [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $response->assertRedirect("/");
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function logout_deauthenticates_and_redirects_user()
    {
        $user = factory(User::class)->create();
        auth()->setUser($user);

        $response = $this->actingAs($user)->post(route('logout'));

        $response->assertRedirect("/");
        $this->assertFalse(auth()->check());
    }
}
