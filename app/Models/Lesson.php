<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function teacher() {
        return $this->belongsTo('App\Models\Teacher');
    }
    
      public function reserves()
    {
        return $this->hasMany('App\Models\Reserve');
    }
    //
}
