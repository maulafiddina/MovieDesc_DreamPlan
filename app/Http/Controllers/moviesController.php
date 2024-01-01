<?php

namespace App\Http\Controllers;

use App\Models\movies;
use Illuminate\Http\Request;

class moviesController extends Controller
{
    public function getData(Request $request)
    {
        $query = movies::with('genre');

        // Check if a search parameter is provided
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%');
            });
        }

        $data = $query->get();

        return response()->json(['data' => $data]);
    }
}
