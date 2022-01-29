<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photogallary extends Model
{
    protected $fillable = [
    'id',
    'caption',
    'photogallary',
   ];

protected $table = 'photogallary';

}
