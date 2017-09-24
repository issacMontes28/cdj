<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Test setup.
     */
    public function setUp()
    {
        parent::setUp();
        $this->withExceptionHandling();
    }

    /**
     * Testing login functionality.
     *
     * @param null $user
     * @return $this
     */
    protected function signIn($user = null)
    {
        $user = $user ?: create(User::class);

        $this->actingAs($user);

        return $this;
    }
}
