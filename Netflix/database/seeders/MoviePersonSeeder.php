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
                'id' => 1,
                'movie_id' => 5,
                'person_id' => 1,
            ],
            [
                'id' => 2,
                'movie_id' => 5,
                'person_id' => 3,
            ],
            [
                'id' => 3,
                'movie_id' => 10,
                'person_id' => 7,
            ],
        ]);
    }
}
