<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected $adminUser;

    protected $normalUser;

    protected function setUp(): void
    {
        parent::setUp();

        $this->adminUser = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'admin',
            'remember_token' => 'abc',
            'is_admin' => true,
        ]);

        $this->normalUser = User::create([
            'name' => 'Normal',
            'email' => 'normal@admin.com',
            'password' => 'normal',
            'remember_token' => 'abc',
            'is_admin' => false,
        ]);
    }
}
