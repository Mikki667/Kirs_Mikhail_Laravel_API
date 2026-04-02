<?php

namespace App\Http\Controllers;
use App\Models\Director;

use Illuminate\Http\Request;

/*
 * Here I created a controller for the directors
 * 
 * By adding functions to the controller I added an "index" function 
 * 
 * the function "show" was added as well
 * 
 * I added the "store" function to be able to add new directors to the database
 */

class DirectorController extends Controller
{
    //
    public function index(Request $request)
    {
        $directorName = $request->get('name', '');

        $directorsQuery = Director::query();

        if (! empty($directorName)) {
            $directorsQuery->where('name', 'LIKE', '%' . $directorName . '%');
        }

        $directors = $directorsQuery->get();
        return $directors;
    }

    public function show(Director $director)
    {
        return $director;
    }

    public function store(Request $request)
    {
        $name = $request->input('name');

        $director = Director::make([
            'name' => $name,
       ]);

        $director->save();

        return $director;
    }
}
