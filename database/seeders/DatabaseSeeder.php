<?php

namespace Database\Seeders;

use App\Models\Roles;
use App\Models\User;
use Database\Factories\RoleFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => Str::random(10),
            'prenom' => Str::random(10),
            'avatar' => Str::random(10),
            'age' => date('Y-m-d'),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            
        ]);

        
        
    }
}
