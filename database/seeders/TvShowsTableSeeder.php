<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TvShowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample TV shows data
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
