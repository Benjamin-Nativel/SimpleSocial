<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'commentaires' => $this->faker->sentences(),
            'id_post' =>DB::table('posts')->inRandomOrder()->first()->id,
            'id_users' =>DB::table('users')->inRandomOrder()->first()->id,
           ];   
    }
}
