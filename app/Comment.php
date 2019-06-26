<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
 protected $fillable = [
       'post_id',
        'description'
      
    ];
   public function post()
{
    return $this->belongesTo('Post::class');
}
}
