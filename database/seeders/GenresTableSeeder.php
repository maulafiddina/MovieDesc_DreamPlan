<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample genres data
        $genres = [
            ['nama' => 'Action'],
            ['nama' => 'Adventure'],
            ['nama' => 'Drama'],
            ['nama' => 'Comedy'],
            // Add more genres as needed
        ];

        // Insert data into the 'genres' table
        DB::table('genres')->insert($genres);
    }
}
