<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviePersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movie_person')->insert([
            [
                'movie_id' => 5,
                'person_id' => 1,
            ],
            [
                'movie_id' => 4,
                'person_id' => 2,
            ],
            [
                'movie_id' => 7,
                'person_id' => 3,
            ],
            [
                'movie_id' => 5,
                'person_id' => 4,
            ],
            [
                'movie_id' => 9,
                'person_id' => 5,
            ],
            [
                'movie_id' => 1,
                'person_id' => 6,
            ],
            [
                'movie_id' => 2,
                'person_id' => 7,
            ],
            [
                'movie_id' => 3,
                'person_id' => 8,
            ],
            [
                'movie_id' => 6,
                'person_id' => 9,
            ],
            [
                'movie_id' => 3,
                'person_id' => 10,
            ],
        ]);
    }
}
