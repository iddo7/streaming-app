<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    use HasFactory;

    protected $fillable = ['']

    public function persons()
    {
        return $this->belongsToMany(Person::class);
    }
}
