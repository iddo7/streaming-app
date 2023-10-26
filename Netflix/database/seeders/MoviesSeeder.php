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
            'cover' => 'path_to_cover_image1.jpg',
            'duration_minutes' => 120,
            'director_id' => 1,
            'producer_id' => 1,
            'annee' => '2023-10-19',
            'rating' => 4,
            'lien_video' => 'https://www.youtube.com/watch?v=skoda_video1'
        ],
        [
            'id' => 2,
            'title' => "Skibidi Toilets win again",
            'summary' => "skibidi toilet vs creeper",
            'cover' => 'path_to_cover_image2.jpg',
            'duration_minutes' => 90,
            'director_id' => 2,
            'producer_id' => 2,
            'annee' => '2023-10-20',
            'rating' => 5,
            'lien_video' => 'https://www.youtube.com/watch?v=skibidi_video2'
        ],
        [
            'id' => 3,
            'title' => "Epic Adventures",
            'summary' => "A group of unlikely heroes embarks on an epic journey to save the world.",
            'cover' => 'path_to_cover_image3.jpg',
            'duration_minutes' => 150,
            'director_id' => 3,
            'producer_id' => 3,
            'annee' => '2023-10-21',
            'rating' => 4,
            'lien_video' => 'https://www.youtube.com/watch?v=epic_adventures'
        ],
        [
            'id' => 4,
            'title' => "Love in Paris",
            'summary' => "A romantic tale set against the backdrop of the City of Lights.",
            'cover' => 'path_to_cover_image4.jpg',
            'duration_minutes' => 110,
            'director_id' => 4,
            'producer_id' => 4,
            'annee' => '2023-10-22',
            'rating' => 5,
            'lien_video' => 'https://www.youtube.com/watch?v=love_in_paris'
        ],
        [
            'id' => 5,
            'title' => "The Quantum Enigma",
            'summary' => "A mind-bending thriller that explores the mysteries of the universe.",
            'cover' => 'path_to_cover_image5.jpg',
            'duration_minutes' => 135,
            'director_id' => 5,
            'producer_id' => 5,
            'annee' => '2023-10-23',
            'rating' => 4,
            'lien_video' => 'https://www.youtube.com/watch?v=quantum_enigma'
        ],
        [
            'id' => 6,
            'title' => "Guardians of the Galaxy",
            'summary' => "A group of misfit heroes join forces to protect the galaxy from an ancient threat.",
            'cover' => 'path_to_cover_image6.jpg',
            'duration_minutes' => 130,
            'director_id' => 6,
            'producer_id' => 6,
            'annee' => '2023-10-24',
            'rating' => 5,
            'lien_video' => 'https://www.youtube.com/watch?v=guardians_of_the_galaxy'
        ],
        [
            'id' => 7,
            'title' => "Mystic Forest",
            'summary' => "A young adventurer stumbles upon a magical forest with secrets beyond imagination.",
            'cover' => 'path_to_cover_image7.jpg',
            'duration_minutes' => 120,
            'director_id' => 7,
            'producer_id' => 7,
            'annee' => '2023-10-25',
            'rating' => 4,
            'lien_video' => 'https://www.youtube.com/watch?v=mystic_forest'
        ],
        [
            'id' => 8,
            'title' => "Inception",
            'summary' => "A mind-bending heist thriller where dreams become the battleground.",
            'cover' => 'path_to_cover_image8.jpg',
            'duration_minutes' => 148,
            'director_id' => 8,
            'producer_id' => 8,
            'annee' => '2023-10-26',
            'rating' => 5,
            'lien_video' => 'https://www.youtube.com/watch?v=inception'
        ],
        [
            'id' => 9,
            'title' => "The Dark Knight",
            'summary' => "The caped crusader faces his greatest challenge in the form of the Joker.",
            'cover' => 'path_to_cover_image9.jpg',
            'duration_minutes' => 152,
            'director_id' => 9,
            'producer_id' => 9,
            'annee' => '2023-10-27',
            'rating' => 5,
            'lien_video' => 'https://www.youtube.com/watch?v=the_dark_knight'
        ],
        [
            'id' => 10,
            'title' => "Pirates of the Caribbean",
            'summary' => "A swashbuckling adventure on the high seas with Captain Jack Sparrow.",
            'cover' => 'path_to_cover_image10.jpg',
            'duration_minutes' => 143,
            'director_id' => 10,
            'producer_id' => 10,
            'annee' => '2023-10-28',
            'rating' => 4,
            'lien_video' => 'https://www.youtube.com/watch?v=pirates_of_the_caribbean'
        ],
    ]);
}

}
