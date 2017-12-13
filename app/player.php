<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    public $timestamps = false;
    public function gender()
    {
      return $this->belongsTo('App\gender');
    }
    public function team()
    {
      return $this->belongsTo('App\team');
    }
}
