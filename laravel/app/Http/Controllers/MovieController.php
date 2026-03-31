<?php

namespace App\Http\Controllers;
use App\Models\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index(Request $request)
    {
        $directorId = $request->get('director_id', null);
        $directorName = $request->get('director_name', '');

        $moviesQuery = Movie::query();
        if ($directorId !== null) {
            $moviesQuery->where('director_id', '=', $directorId);
        }

        if (! empty($directorName)) {
            $moviesQuery->whereHas('director', function ($directorQuery) use ($directorName) {
                $directorQuery->where('name', 'LIKE', '%' . $directorName . '%');
            });
        }
        $moviesQuery->with('director');
        $movies = $moviesQuery->get();
        return $movies;
    }

    public function show(Movie $movie)
    {
        $movie->load('director');
        return $movie;
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $directorId = $request->input('director_id', null);

        $movie = Movie::make([
            'title' => $title,
        ]);

        $movie->director()->associate($directorId);
        $movie->save();

        return $movie;
    }

    public function update(Request $request, Movie $movie)
    {
        if ($request->has('title')) {
            $movie->title = $request->input('title');
        }

        $movie->save();

        return $movie;
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
    }
}
