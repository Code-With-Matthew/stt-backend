<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  public function run(): void
  {
    // Memerintahkan Laravel membuat 10 data berita acak
    Post::factory(10)->create();
  }
}
