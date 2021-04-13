<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
  use HasFactory;

  protected $fillable = [
    'title',
    'body',
    'image',
    'category'
  ];

  public function work_images()
  {
    return $this->hasMany(Workimages::class);
  }

}
