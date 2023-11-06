<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    use HasFactory;

    protected $fillable = ['name', 'gender', 'birthday', 'placeOfBirth', 'pictureUrl', 'mainRole'];

    public function persons()
    {
        return $this->belongsToMany(Person::class);
    }
}
