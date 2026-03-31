<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Director extends Model
{
    use HasFactory;
    
    // this function returns all movies to a director since in my project one director can have many movies
    public function movies(): HasMany
    {
        return $this->hasMany(Movie::class);
    }
}
