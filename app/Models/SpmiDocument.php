<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpmiDocument extends Model
{
  protected $fillable = ['title', 'category', 'document_number', 'file_path', 'year'];
}
