<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['author_id', 'title','slug', 'excerpt', 'body', 'image'];

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
