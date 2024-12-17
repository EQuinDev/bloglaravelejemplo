<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'category', 'category_id', 'published_at', 'is_active'];

     public function category(): BelongsTo
     {
         return $this->belongsTo(Category::class);
    }

    // protected $fillable = ['title', 'content'];

    // public function categories(): BelongsToMany
    // {
    //     return $this->belongsToMany(Category::class);
    // }
}
