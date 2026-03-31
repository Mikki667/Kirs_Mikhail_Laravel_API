<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    // So this function connects a movie to a director. For my project i decided to go with Movies/directors theme
    public function director(): BelongsTo
    {
        return $this->belongsTo(Director::class);
    }
}
