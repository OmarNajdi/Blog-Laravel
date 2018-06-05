<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;


class Post extends Model implements HasMedia
{
    use HasMediaTrait;
    protected $fillable=['title','body'];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

}
