<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
  protected $fillable = [
    'id',
    'content',
    'atype',
   ];

  protected $table = 'article';
}
