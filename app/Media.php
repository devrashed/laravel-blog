<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    ///use Notifiable;

     protected $fillable = [
    'titel',
    'gender',
    'mcontent',
    'youtube_video',
    'mimages',
    'mediatype',
];

  protected $table = 'media';

 
}
