<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';
    use HasFactory;

    protected $fillable = ['name', 'gender', 'birthday', 'placeOfBirth', 'pictureUrl', 'mainRole'];

    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }

    public function moviesDirected()
    {
        return $this->hasMany(Movie::class, 'director_id');
    }

    public function moviesProduced()
    {
        return $this->hasMany(Movie::class, 'producer_id');
    }
}
