<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
  protected $fillable = ['tname', 'owner', 'manager'];
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
