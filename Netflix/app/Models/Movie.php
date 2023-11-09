<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    use HasFactory;

    protected $fillable = ['title', 'director_id', 'producer_id', 'cover', 'duration_minutes', 'annee', 'rating', 'lien_video', 'summary'];

    public function persons()
    {
        return $this->belongsToMany(Person::class);
    }
}
