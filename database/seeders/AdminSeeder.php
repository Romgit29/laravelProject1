<?php

namespace Database\Seeders;

use Spatie\Permission\Traits\HasRoles;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => fake()->name(),
            'login' => "admin",
            'email' => "admin@admin.com",
            'email_verified_at' => now(),
            'password' => bcrypt('adminpass'), // password
            'remember_token' => Str::random(10),
        ]);
        $user->assignRole("admin");
    }
}
