<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
      'img_title',
      'img_path'
    ];
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
