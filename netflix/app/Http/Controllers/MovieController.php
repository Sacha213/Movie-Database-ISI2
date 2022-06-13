<?php

namespace App\Http\Controllers;

use DB;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = DB::table('shows')
                    ->where('shows.type_id', '1')
                    ->select('shows.*')
                    ->get();

        return view('movies', compact('movies'));
    }

}