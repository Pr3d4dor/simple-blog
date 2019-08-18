<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'admin',
            'remember_token' => Str::random(10),
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'Normal',
            'email' => 'normal@admin.com',
            'password' => 'normal',
            'remember_token' => Str::random(10),
            'is_admin' => false,
        ]);
    }
}
