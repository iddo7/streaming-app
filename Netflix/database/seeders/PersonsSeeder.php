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
            'placeOfBirth' => 'New York',
            'pictureUrl' => 'http://images2.fanpop.com/images/photos/7900000/JOHN-DOE-john-doe-7969105-1735-2560.jpg',
            'mainRole' => 'actor',
        ],
        [
            'id' => 2,
            'name' => 'Jane Smith',
            'gender' => 'female',
            'placeOfBirth' => 'Los Angeles',
            'pictureUrl' => 'https://img.networthpost.org/thumbs/2806278_jane-smith/2806278_jane-smith_1.jpeg',
            'mainRole' => 'producer',
        ],
        [
            'id' => 3,
            'name' => 'Alice Johnson',
            'gender' => 'female',
            'placeOfBirth' => 'Chicago',
            'pictureUrl' => 'https://tse1.mm.bing.net/th?id=OIP.keOwACWeX4EpBnw34d_3_QHaKi&pid=Api',
            'mainRole' => 'director',
        ],
        [
            'id' => 4,
            'name' => 'Bob Brown',
            'gender' => 'male',
            'placeOfBirth' => 'Miami',
            'pictureUrl' => 'https://cache.legacy.net/legacy/images/cobrands/grandrapids/photos/WM0203395-1_20231019.jpgx?w=600&h=499',
            'mainRole' => 'actor',
        ],
        [
            'id' => 5,
            'name' => 'Eva Davis',
            'gender' => 'female',
            'placeOfBirth' => 'San Francisco',
            'pictureUrl' => 'https://i.ytimg.com/vi/R-kWnnZ1lOM/maxresdefault.jpg',
            'mainRole' => 'actor',
        ],
        [
            'id' => 6,
            'name' => 'Michael Wilson',
            'gender' => 'male',
            'placeOfBirth' => 'Houston',
            'pictureUrl' => 'https://assets.dmagstatic.com/wp-content/uploads/2018/02/Michael-Wilson-headshot.jpg',
            'mainRole' => 'director',
        ],
        [
            'id' => 7,
            'name' => 'Grace Lee',
            'gender' => 'female',
            'placeOfBirth' => 'Seattle',
            'pictureUrl' => 'https://netstorage-kami.akamaized.net/images/d3e3e703047d7d4d.jpg?imwidth=900',
            'mainRole' => 'producer',
        ],
        [
            'id' => 8,
            'name' => 'David Taylor',
            'gender' => 'male',
            'placeOfBirth' => 'Dallas',
            'pictureUrl' => 'https://www.win-magazine.com/wp-content/uploads/2014/04/david-taylor-mug-shot.jpg',
            'mainRole' => 'director',
        ],
        [
            'id' => 9,
            'name' => 'Emily White',
            'gender' => 'female',
            'placeOfBirth' => 'Boston',
            'pictureUrl' => 'https://vanderbilthustler.com/wp-content/uploads/2019/10/emily-white.jpg',
            'mainRole' => 'director',
        ],
        [
            'id' => 10,
            'name' => 'William Johnson',
            'gender' => 'male',
            'placeOfBirth' => 'Philadelphia',
            'pictureUrl' => 'https://www.albanyinstitute.org/tl_files/collection/paintings/1922.2_wollaston.jpg',
            'mainRole' => 'actor',
        ],
    ]);
}

}
