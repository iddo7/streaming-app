<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('persons')->insert([
            [
                'name' => 'John Doe',
                'placeOfBirth' => 'New York',
                'pictureUrl' => 'https://example.com/john-doe.jpg',
            ],
            [
                'name' => 'Jane Smith',
                'placeOfBirth' => 'Los Angeles',
                'pictureUrl' => 'https://example.com/jane-smith.jpg',
            ],
            [
                'name' => 'Alice Johnson',
                'placeOfBirth' => 'Chicago',
                'pictureUrl' => 'https://example.com/alice-johnson.jpg',
            ],
            [
                'name' => 'Bob Brown',
                'placeOfBirth' => 'Miami',
                'pictureUrl' => 'https://example.com/bob-brown.jpg',
            ],
            [
                'name' => 'Eva Davis',
                'placeOfBirth' => 'San Francisco',
                'pictureUrl' => 'https://example.com/eva-davis.jpg',
            ],
            [
                'name' => 'Michael Wilson',
                'placeOfBirth' => 'Houston',
                'pictureUrl' => 'https://example.com/michael-wilson.jpg',
            ],
            [
                'name' => 'Grace Lee',
                'placeOfBirth' => 'Seattle',
                'pictureUrl' => 'https://example.com/grace-lee.jpg',
            ],
            [
                'name' => 'David Taylor',
                'placeOfBirth' => 'Dallas',
                'pictureUrl' => 'https://example.com/david-taylor.jpg',
            ],
        ]);
    }
}
