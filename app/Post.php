<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use GrahamCampbell\Markdown\Facades\Markdown;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'excerpt', 'body', 'category_id'];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter($query, $term)
    {
        // check if any term entered
        if ($term)
        {
            $query->where(function($q) use ($term) {
                $q->orWhere('title', 'LIKE', "%{$term}%");
            });
        }
    }
}
