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
            'id' => 1,
            'name' => 'John Doe',
            'placeOfBirth' => 'New York',
            'pictureUrl' => 'https://example.com/john-doe.jpg',
        ],
        [
            'id' => 2,
            'name' => 'Jane Smith',
            'placeOfBirth' => 'Los Angeles',
            'pictureUrl' => 'https://example.com/jane-smith.jpg',
        ],
        [
            'id' => 3,
            'name' => 'Alice Johnson',
            'placeOfBirth' => 'Chicago',
            'pictureUrl' => 'https://example.com/alice-johnson.jpg',
        ],
        [
            'id' => 4,
            'name' => 'Bob Brown',
            'placeOfBirth' => 'Miami',
            'pictureUrl' => 'https://example.com/bob-brown.jpg',
        ],
        [
            'id' => 5,
            'name' => 'Eva Davis',
            'placeOfBirth' => 'San Francisco',
            'pictureUrl' => 'https://example.com/eva-davis.jpg',
        ],
        [
            'id' => 6,
            'name' => 'Michael Wilson',
            'placeOfBirth' => 'Houston',
            'pictureUrl' => 'https://example.com/michael-wilson.jpg',
        ],
        [
            'id' => 7,
            'name' => 'Grace Lee',
            'placeOfBirth' => 'Seattle',
            'pictureUrl' => 'https://example.com/grace-lee.jpg',
        ],
        [
            'id' => 8,
            'name' => 'David Taylor',
            'placeOfBirth' => 'Dallas',
            'pictureUrl' => 'https://example.com/david-taylor.jpg',
        ],
        [
            'id' => 9,
            'name' => 'Emily White',
            'placeOfBirth' => 'Boston',
            'pictureUrl' => 'https://example.com/emily-white.jpg',
        ],
        [
            'id' => 10,
            'name' => 'William Johnson',
            'placeOfBirth' => 'Philadelphia',
            'pictureUrl' => 'https://example.com/william-johnson.jpg',
        ],
    ]);
}

}
