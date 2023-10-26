<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';
    use HasFactory;

    public function movies() : HasMany
    {
        return $this->belongsToMany(Movie::class);
    }
}
