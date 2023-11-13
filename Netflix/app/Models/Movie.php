<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    use HasFactory;

    protected $fillable = ['title', 'summary', 'cover', 'duration_minutes', 'director_id', 'producer_id', 'annee', 'rating', 'lien_video' ];

    public function persons()
    {
        return $this->belongsToMany(Person::class);
    }

    public function director() 
    {
        return $this->belongsTo(Person::class);
    }

    public function producer() 
    {
        return $this->belongsTo(Person::class);
    }
}
