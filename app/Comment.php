<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $fillable = [
       'content'
   ];

  public function user()
  {
      return $this->belongsTo('App\User');
  }

  public function post()
  {
      return $this->hasMany('App\Post');
  }

  protected $table = "comments";
}

}
