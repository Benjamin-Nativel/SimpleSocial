<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()
        ->count(2)
         ->create([
                'id_users' => int::random(0, 14),
                'image' => Str::random(),
                'text' => Str::random(250),
                'censure' => bool::random(),
            ]);
        
    }
}
