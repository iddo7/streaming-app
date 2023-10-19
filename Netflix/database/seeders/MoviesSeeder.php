<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            [
                'title' => "The skoda",
                'resume' => "baaaaaa"
            ],
            [
                'title' => "Skibidi Toilets win again",
                'resume' => "skibidi toilet vs creeper"
            ],
        ]);
    }
}
