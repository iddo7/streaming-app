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
                'id' => 1,
                'title' => "The skoda",
                'summary' => "baaaaaa",
                'cover' => 'img/movies/the_skoda.jpg',
                'duration_minutes' => 120,
                'director_id' => 1,
                'producer_id' => 1,
                'annee' => '2021',
                'rating' => 7,
                'lien_video' => 'https://www.youtube.com/watch?v=skoda_video1'
            ],
            [
                'id' => 2,
                'title' => "Skibidi Toilets win again",
                'summary' => "skibidi toilet vs creeper",
                'cover' => 'img/movies/skibidi_win_again.jpg',
                'duration_minutes' => 90,
                'director_id' => 2,
                'producer_id' => 2,
                'annee' => '2018',
                'rating' => 8,
                'lien_video' => 'https://www.youtube.com/watch?v=skibidi_video2'
            ],
            [
                'id' => 3,
                'title' => "Epic Adventures",
                'summary' => "A group of unlikely heroes embarks on an epic journey to save the world.",
                'cover' => 'img/movies/epic_adventure.jpg',
                'duration_minutes' => 150,
                'director_id' => 3,
                'producer_id' => 3,
                'annee' => '2020',
                'rating' => 9,
                'lien_video' => 'https://www.youtube.com/watch?v=epic_adventures'
            ],
            [
                'id' => 4,
                'title' => "Love in Paris",
                'summary' => "A romantic tale set against the backdrop of the City of Lights.",
                'cover' => 'img/movies/love_in_paris.jpg',
                'duration_minutes' => 110,
                'director_id' => 4,
                'producer_id' => 4,
                'annee' => '1997',
                'rating' => 6,
                'lien_video' => 'https://www.youtube.com/watch?v=love_in_paris'
            ],
            [
                'id' => 5,
                'title' => "The Quantum Enigma",
                'summary' => "A mind-bending thriller that explores the mysteries of the universe.",
                'cover' => 'img/movies/quantum_enigma.jpg',
                'duration_minutes' => 135,
                'director_id' => 5,
                'producer_id' => 5,
                'annee' => '2014',
                'rating' => 7,
                'lien_video' => 'https://www.youtube.com/watch?v=quantum_enigma'
            ],
            [
                'id' => 6,
                'title' => "Guardians of the Galaxy",
                'summary' => "A group of misfit heroes join forces to protect the galaxy from an ancient threat.",
                'cover' => 'img/movies/gardian_bean_galaxy.jpg',
                'duration_minutes' => 130,
                'director_id' => 6,
                'producer_id' => 6,
                'annee' => '2014',
                'rating' => 8,
                'lien_video' => 'https://www.youtube.com/watch?v=guardians_of_the_galaxy'
            ],
            [
                'id' => 7,
                'title' => "Mystic Forest",
                'summary' => "A young adventurer stumbles upon a magical forest with secrets beyond imagination.",
                'cover' => 'img/movies/mystic_forest.jpg',
                'duration_minutes' => 120,
                'director_id' => 7,
                'producer_id' => 7,
                'annee' => '2016',
                'rating' => 6,
                'lien_video' => 'https://www.youtube.com/watch?v=mystic_forest'
            ],
            [
                'id' => 8,
                'title' => "Inception",
                'summary' => "A mind-bending heist thriller where dreams become the battleground.",
                'cover' => 'img/movies/inception.jpg',
                'duration_minutes' => 148,
                'director_id' => 8,
                'producer_id' => 8,
                'annee' => '2010',
                'rating' => 9,
                'lien_video' => 'https://www.youtube.com/watch?v=inception'
            ],
            [
                'id' => 9,
                'title' => "The Dark Knight",
                'summary' => "The caped crusader faces his greatest challenge in the form of the Joker.",
                'cover' => 'img/movies/batman.jpg',
                'duration_minutes' => 152,
                'director_id' => 9,
                'producer_id' => 9,
                'annee' => '2008',
                'rating' => 9,
                'lien_video' => 'https://www.youtube.com/watch?v=the_dark_knight'
            ],
            [
                'id' => 10,
                'title' => "Pirates of the Beans",
                'summary' => "A swashbuckling adventure on the high seas with Captain Bean Sparrow.",
                'cover' => 'img/movies/pirates_of_the_beans.jpg',
                'duration_minutes' => 143,
                'director_id' => 10,
                'producer_id' => 10,
                'annee' => '2011',
                'rating' => 7,
                'lien_video' => 'https://www.youtube.com/watch?v=pirates_of_the_caribbean'
            ],
        ]);
    }
}
