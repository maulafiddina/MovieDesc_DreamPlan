<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $genres = [
            ['nama' => 'Action'],
            ['nama' => 'Adventure'],
            ['nama' => 'Drama'],
            ['nama' => 'Comedy'],
            // Add more genres as needed
        ];

        // Insert data into the 'genres' table
        DB::table('genres')->insert($genres);

        $movies = [
            [
                'image' => 'path/to/image1.jpg',
                'title' => 'Movie 1',
                'genre_id' => 1, // Assuming 'Action' genre has id = 1
                'description' => 'Description for Movie 1.',
                'rating' => 8.5,
                'release_year' => 2022,
                'soft_delete' => 0,
            ],
            [
                'image' => 'path/to/image2.jpg',
                'title' => 'Movie 2',
                'genre_id' => 2, // Assuming 'Adventure' genre has id = 2
                'description' => 'Description for Movie 2.',
                'rating' => 7.8,
                'release_year' => 2021,
                'soft_delete' => 0,
            ],
            // Add more movies as needed
        ];

        // Insert data into the 'movies' table
        DB::table('movies')->insert($movies);

        $tvShows = [
            [
                'image_url' => 'path/to/tv_show1.jpg',
                'title' => 'TV Show 1',
                'genre_id' => 1, // Assuming 'Action' genre has id = 1
                'description' => 'Description for TV Show 1.',
                'rating' => 8.2,
                'release_year' => 2020,
                'episode_count' => 10,
                'soft_delete' => 0,
            ],
            [
                'image_url' => 'path/to/tv_show2.jpg',
                'title' => 'TV Show 2',
                'genre_id' => 2, // Assuming 'Adventure' genre has id = 2
                'description' => 'Description for TV Show 2.',
                'rating' => 7.5,
                'release_year' => 2019,
                'episode_count' => 8,
                'soft_delete' => 0,
            ],
            // Add more TV shows as needed
        ];

        // Insert data into the 'tv_shows' table
        DB::table('tv_shows')->insert($tvShows);
    }
}
