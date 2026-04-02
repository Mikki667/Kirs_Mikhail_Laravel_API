<?php

namespace App\Http\Controllers;
use App\Models\Director;

use Illuminate\Http\Request;

/*
 * Here I created a controller for the directors
 * 
 * By adding functions to the controller I added an "index" function 
 * 
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
}
