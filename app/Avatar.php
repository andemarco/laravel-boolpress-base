<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $fillable = [
      'avatar_path',
      'avatar_name'
    ];
    public function user()
    {
      return $this->belongsTo('App/User');
    }
}
