<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //// 1. query the Roles by the slug
    $adminRole = \HttpOz\Roles\Models\Role::whereSlug('admin')->first();
    $userRole = \HttpOz\Roles\Models\Role::whereSlug('user')->first();

    // 2a. Create admin
    $admin = \App\User::create([
        'name' => 'Gem Elaine',
        'email' => 'gemstone@github.com',
        'password' => bcrypt('password')
    ]);

    // 2b. Create forum user
    $user = \App\User::create([
        'name' => 'JulieQueen Starr',
        'email' => 'jlqnstarr@github.com',
        'password' => bcrypt('password')
    ]);

    // 3. Attach a role to the user object / assign a role to a user
    $admin->attachRole($adminRole);
    $user->attachRole($userRole);
    }
}
