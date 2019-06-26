<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
     public function problems()
    {
        return $this->hasMany('App\Problem','parent_id');
    }
}
