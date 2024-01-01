<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample movies data
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
    }
}
