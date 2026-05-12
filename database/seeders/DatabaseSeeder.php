<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Page;
use App\Models\Program;
use App\Models\SpmiDocument;

class DatabaseSeeder extends Seeder
{
  public function run(): void
  {
    // 1. Data Berita (yang sudah ada sebelumnya)
    Post::factory(5)->create();

    // 2. Data Halaman Profil
    Page::create([
      'title' => 'Visi dan Misi',
      'slug' => 'visi-misi',
      'content' => 'Ini adalah konten visi dan misi institusi...'
    ]);

    // 3. Data Program Studi
    Program::create([
      'name' => 'Teologi Kependetaan',
      'slug' => 'teologi-kependetaan',
      'degree_level' => 'S1',
      'accreditation' => 'Baik Sekali'
    ]);

    // 4. Data Dokumen SPMI
    SpmiDocument::create([
      'title' => 'Standar Mutu Pendidikan',
      'category' => 'standar',
      'file_path' => 'documents/standar-mutu.pdf',
      'year' => 2026
    ]);
  }
}
