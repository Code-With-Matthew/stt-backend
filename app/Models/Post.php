<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use HasFactory;

  // Mengizinkan kolom-kolom ini untuk diisi data
  protected $fillable = [
    'user_id',
    'title',
    'slug',
    'content',
    'status',
    'cover_image'
  ];
}
