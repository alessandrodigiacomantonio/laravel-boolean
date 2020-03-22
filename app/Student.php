<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $fillable = [
    'name',
    'age',
    'description',
    'company',
    'job',
    'img',
    'updated_at',
    'slug',
  ];
}
