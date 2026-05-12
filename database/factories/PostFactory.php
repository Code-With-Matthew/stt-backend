<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class PostFactory extends Factory
{
  public function definition(): array
  {
    $title = fake()->sentence();
    return [
      // Otomatis membuatkan user penulis jika belum ada
      'user_id' => User::factory(),
      'title' => $title,
      'slug' => Str::slug($title),
      'content' => fake()->paragraphs(3, true),
      'status' => fake()->randomElement(['draft', 'published']),
    ];
  }
}
