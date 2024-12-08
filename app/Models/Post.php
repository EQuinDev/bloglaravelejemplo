<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $table = 'posts';

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            // Mutador | reemplaza el nombre del elemento por minúsculas
            set: function($value){
                return strtolower($value);
            },
            // Accesor | modifica un valor cuando accedemos a él
            get: function($value)
            {
                return ucfirst($value);
            }
        );

    }
}
