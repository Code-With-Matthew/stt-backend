<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
  protected $fillable = ['name', 'slug', 'degree_level', 'accreditation', 'description', 'head_of_program'];
}
