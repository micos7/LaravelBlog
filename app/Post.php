<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getBodyAttribute($body){   
     return strip_tags($body);
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
