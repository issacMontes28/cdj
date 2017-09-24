<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthAccesibilityTest extends TestCase
{
    use RefreshDatabase;

    protected $user;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        parent::setUp();
        $this->user = create(User::class);
    }

    /** @test */
    public function testNonLoggedUserCanVisitLoginPage()
    {
        $this->get('login')
            ->assertStatus(200)
            ->assertViewIs('auth.login')
            ->assertSee('Login');
    }

    /** @test */
    public function testNonLoggedUsersCanVisitRegister()
    {
        $this->get('register')
            ->assertStatus(200)
            ->assertViewIs('auth.register')
            ->assertSee('Register');
    }

    /** @test */
    public function testASignedInUserIsRedirectedToHome()
    {
        $this->signIn($this->user);

        $this->get('login')
            ->assertStatus(302)
            ->assertRedirect('home');
    }

    /** @test */
    public function testANonSignedUserIsRedirectedToLogin()
    {
        $this->get('home')
            ->assertStatus(302)
            ->assertRedirect('login');
    }
}
