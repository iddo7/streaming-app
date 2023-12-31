<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    { 
        $this->call(PersonsSeeder::class);
        $this->call(MoviesSeeder::class);
        $this->call(MoviePersonSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
