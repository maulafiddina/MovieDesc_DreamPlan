<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index(){
      $baseURL = env('MOVIE_DB_BASE_URL');
      $imageBaseURL = env('MOVIE_DB_IMAGE_BASE_URL');
      $apiKey = env('MOVIE_DB_API_KEY');

      // API banner
      $bannerResponse = Http::get("{$baseURL}/trending/movie/week", [
        'api_key' => $apiKey,
      ]);


      // variable
      $bannerArray = [];

      // Check API
      if ($bannerResponse->successful()){
        // Check data is null or not
        $resultArray = $bannerResponse->object()->results;
        if (isset($resultArray)){
          $MAX_BANNER = 3;
          // Looping
          foreach ($resultArray as $item) {
            // Save response data to our array variable
            array_push($bannerArray, $item);

            // Only save data based on our max config. Max 3 items
            if (count($bannerArray) == $MAX_BANNER){
              break;
            }
          }
          
        }
      }

      return view('home', [
        'baseURL' => $baseURL,
        'imageBaseURL' => $imageBaseURL,
        'apiKey' => $apiKey,
        'banner' => $bannerArray
      ]);
    }
}

