<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'text' => $this->faker->paragraph(),
          'image' => $this->faker->imageUrl(),
          'id_users' => User::factory()->create()->id,
          'censure' => $this->faker->boolean(),
           
        ]; 
    

  
    }
}
