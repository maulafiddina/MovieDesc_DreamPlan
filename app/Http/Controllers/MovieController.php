<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{

  //NAMBAHIN FUNGSI MOVIES () GITU ini bagian 03A
  //yg  halaman movie
  public function movies(){
    // Get environment variable
    $baseURL = env('MOVIE_DB_BASE_URL');
    $imageBaseURL = env('MOVIE_DB_IMAGE_BASE_URL');
    $apiKey = env('MOVIE_DB_API_KEY');
    $sortBy = "popularity.desc";
    $page = 1;
    $minimalVoter = 100;

    // Hit API data
    $movieResponse = Http::get("{$baseURL}/discover/movie", [
      'api_key' => $apiKey,
      'sort_by' => $sortBy,
      'vote_count.gte' => $minimalVoter,
      'page' => $page
    ]);

    // Prepare variable
    $movieArray = [];

    // Check API response
    if ($movieResponse->successful()){
      // Check data is null or not
      $resultArray = $movieResponse->object()->results;
      if (isset($resultArray)){
        // Looping response data
        foreach ($resultArray as $item) {
          // Save response data to our array variable
          array_push($movieArray, $item);
        }
      }
    }

    return view('movie', [
      'baseURL' => $baseURL,
      'imageBaseURL' => $imageBaseURL,
      'apiKey' => $apiKey,
      'movies' => $movieArray,
      'sortBy' => $sortBy,
      'page' => $page,
      'minimalVoter' => $minimalVoter
    ]);

  }


  public function index()
  {
    $baseURL = env('MOVIE_DB_BASE_URL');
    $imageBaseURL = env('MOVIE_DB_IMAGE_BASE_URL');
    $apiKey = env('MOVIE_DB_API_KEY');
    $MAX_BANNER = 3;
    $MAX_MOVIE_ITEM = 10;
    $MAX_TV_SHOWS_ITEM = 10;

    // HIT API banner
    $bannerResponse = Http::get("{$baseURL}/trending/movie/week", [
      'api_key' => $apiKey,
    ]);
    // Prepare variable
    $bannerArray = [];

    // Check API response BANNER RESPON INI YG JIONG KMRN
    if ($bannerResponse->successful()){
      // Check data is null or not
      $resultArray = $bannerResponse->object()->results;
      if (isset($resultArray)){
        // Looping response data
        foreach ($resultArray as $item) {
          // Save response data to our array variable
          array_push($bannerArray, $item);

          // Only save data based on our max config. Max 10 items
          if (count($bannerArray) == $MAX_BANNER){
            break;
          }
        }
      }
    }


    // Hit API for Top 10 Movies data
    $topMoviesResponse = Http::get("{$baseURL}/movie/top_rated", [
      'api_key' => $apiKey,
    ]);

    // Prepare variable
    $topMoviesArray = [];

    // Check API response INI KAYANYA HARUS BUAT LAGI TP ERROR GA PAHAM GUE
    // POKOK E INI YANG 10 TOP MOVIES
    if ($topMoviesResponse->successful()){
      // Check data is null or not
      $resultArray = $topMoviesResponse->object()->results;
      if (isset($resultArray)){
        // Looping response data
        foreach ($resultArray as $item) {
          // Save response data to our array variable
          array_push($topMoviesArray, $item);

          // Only save data based on our max config. Max 10 items
          if (count($topMoviesArray) == $MAX_MOVIE_ITEM){
            break;
          }
        }
      }
    }


    // Hit API for Top 10 TV SHOW INI KATANYA data
    $topTVShowsResponse = Http::get("{$baseURL}/tv/top_rated", [
      'api_key' => $apiKey,
    ]);

    // Prepare variable
    $topTVShowsArray = [];

    // Check API response
    if ($topTVShowsResponse->successful()){
      // Check data is null or not
      $resultArray = $topTVShowsResponse->object()->results;
      if (isset($resultArray)){
        // Looping response data
        foreach ($resultArray as $item) {
          // Save response data to our array variable
          array_push($topTVShowsArray, $item);

          // Only save data based on our max config. Max 10 items
          if (count($topTVShowsArray) == $MAX_TV_SHOWS_ITEM){
            break;
          }
        }
      }
    }

    return view('home', [
      'baseURL' => $baseURL,
      'imageBaseURL' => $imageBaseURL,
      'apiKey' => $apiKey,
      'banner' => $bannerArray,
      'topMovies' => $topMoviesArray,
      'topTVShows' => $topTVShowsArray,

    ]);
  }

  public function tvShows(){
    // Get environment variable
    $baseURL = env('MOVIE_DB_BASE_URL');
    $imageBaseURL = env('MOVIE_DB_IMAGE_BASE_URL');
    $apiKey = env('MOVIE_DB_API_KEY');
    $sortBy = "popularity.desc";
    $page = 1;
    $minimalVoter = 100;

    // Hit API data
    $tvResponse = Http::get("{$baseURL}/discover/tv", [
      'api_key' => $apiKey,
      'sort_by' => $sortBy,
      'vote_count.gte' => $minimalVoter,
      'page' => $page
    ]);

    // Prepare variable
    $tvArray = [];

    // Check API response
    if ($tvResponse->successful()){
      // Check data is null or not
      $resultArray = $tvResponse->object()->results;
      if (isset($resultArray)){
        // Looping response data
        foreach ($resultArray as $item) {
          // Save response data to our array variable
          array_push($tvArray, $item);
        }
      }
    }

    // Show tv.blade.php with additional data
    return view('tv', [
      'baseURL' => $baseURL,
      'imageBaseURL' => $imageBaseURL,
      'apiKey' => $apiKey,
      'tvShows' => $tvArray,
      'sortBy' => $sortBy,
      'page' => $page,
      'minimalVoter' => $minimalVoter
    ]);
  }

  public function search(){
    // Get environment variable
    $baseURL = env('MOVIE_DB_BASE_URL');
    $imageBaseURL = env('MOVIE_DB_IMAGE_BASE_URL');
    $apiKey = env('MOVIE_DB_API_KEY');

    // Show search.blade.php with additional data
    return view('search', [
      'baseURL' => $baseURL,
      'imageBaseURL' => $imageBaseURL,
      'apiKey' => $apiKey,
    ]);
  }
}
