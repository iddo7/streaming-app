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
                'gender' => 'male',
                'birthday' => '1978-03-21',
                'placeOfBirth' => 'New York',
                'pictureUrl' => 'img/people/man_0',
                'mainRole' => 'actor',
            ],
            [
                'id' => 2,
                'name' => 'Jane Smith',
                'gender' => 'female',
                'birthday' => '1990-06-15',
                'placeOfBirth' => 'Los Angeles',
                'pictureUrl' => 'img/people/woman_19',
                'mainRole' => 'producer',
            ],
            [
                'id' => 3,
                'name' => 'Alice Johnson',
                'gender' => 'female',
                'birthday' => '1985-11-30',
                'placeOfBirth' => 'Chicago',
                'pictureUrl' => 'img/people/woman_79',
                'mainRole' => 'director',
            ],
            [
                'id' => 4,
                'name' => 'Bob Brown',
                'gender' => 'male',
                'birthday' => '1992-08-10',
                'placeOfBirth' => 'Chicago',
                'pictureUrl' => 'img/people/man_1',
                'mainRole' => 'actor',
            ],
            [
                'id' => 5,
                'name' => 'Eva Davis',
                'gender' => 'female',
                'birthday' => '1987-05-04',
                'placeOfBirth' => 'San Francisco',
                'pictureUrl' => 'img/people/woman_53',
                'mainRole' => 'actor',
            ],
            [
                'id' => 6,
                'name' => 'Michael Wilson',
                'gender' => 'male',
                'birthday' => '1980-12-18',
                'placeOfBirth' => 'Houston',
                'pictureUrl' => 'img/people/man_4',
                'mainRole' => 'director',
            ],
            [
                'id' => 7,
                'name' => 'Grace Lee',
                'gender' => 'female',
                'birthday' => '1989-09-22',
                'placeOfBirth' => 'Seattle',
                'pictureUrl' => 'img/people/woman_56',
                'mainRole' => 'producer',
            ],
            [
                'id' => 8,
                'name' => 'David Taylor',
                'gender' => 'male',
                'birthday' => '1983-04-06',
                'placeOfBirth' => 'Chicago',
                'pictureUrl' => 'img/people/man_5',
                'mainRole' => 'director',
            ],
            [
                'id' => 9,
                'name' => 'Emily White',
                'gender' => 'female',
                'birthday' => '1995-02-14',
                'placeOfBirth' => 'Boston',
                'pictureUrl' => 'img/people/woman_60',
                'mainRole' => 'director',
            ],
            [
                'id' => 10,
                'name' => 'William Johnson',
                'gender' => 'male',
                'birthday' => '1982-07-29',
                'placeOfBirth' => 'Philadelphia',
                'pictureUrl' => 'img/people/man_6',
                'mainRole' => 'actor',
            ],
        ]);
    }
}
