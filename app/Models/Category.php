<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = ['name'];

    public function posts(): HasMany
     {
         return $this->hasMany(Post::class);
    }

    // public function posts(): BelongsToMany
    // {
    //     return $this->belongsToMany(Post::class);
    // }
}
