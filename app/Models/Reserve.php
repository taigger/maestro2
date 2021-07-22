<?php

namespace App\Models;;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
   public function lesson() {
        return $this->belongsTo('App\Models\Lesson');
    }
    //
}
