<?php

namespace App\Http\Controllers;

use DB;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tvs = DB::table('shows')
                    ->where('shows.type_id', '2')
                    ->select('shows.*')
                    ->get();

        return view('tv', compact('tvs'));
    }

}