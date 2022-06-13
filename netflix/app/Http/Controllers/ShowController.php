<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShowRequest;
use App\Http\Requests\UpdateShowRequest;
use App\Models\Show;
use DB;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animes = DB::table('shows')
                    ->join('appartenances', 'shows.id', '=', 'appartenances.show_id')
                    ->join('genres', 'genres.id', '=', 'appartenances.genre_id')
                    ->where('genres.genre', 'Anime Features')
                    ->orWhere('genres.genre', 'Anime Series')
                    ->select('shows.*')
                    ->get();
        $horrors = DB::table('shows')
                    ->join('appartenances', 'shows.id', '=', 'appartenances.show_id')
                    ->join('genres', 'genres.id', '=', 'appartenances.genre_id')
                    ->where('genres.genre', 'Horror Movies')
                    ->orWhere('genres.genre', 'Thrillers')
                    ->orWhere('genres.genre', 'TV Thrillers')
                    ->select('shows.*')
                    ->get();

        $romantics = DB::table('shows')
                    ->join('appartenances', 'shows.id', '=', 'appartenances.show_id')
                    ->join('genres', 'genres.id', '=', 'appartenances.genre_id')
                    ->where('genres.genre', 'Romantic Movies')
                    ->select('shows.*')
                    ->get();        
        return view('index', compact('animes', 'romantics','horrors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShowRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShowRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Show  $show
     * @return \Illuminate\Http\Response
     */
    public function show($id_show)
    {
        $show = DB::table('shows')
                ->join('directeurs', 'shows.directeur_id', '=', 'directeurs.id')
                ->where('shows.id', $id_show)
                ->select('shows.title', 'directeurs.director', 'shows.duration', 'shows.release_year', 'shows.description', 'shows.img')
                ->first();
        $acteurs = DB::table('shows')
                ->join('participations', 'participations.show_id', '=', 'shows.id' )
                ->join('acteurs', 'participations.acteur_id', '=', 'acteurs.id')
                ->where('shows.id', $id_show)
                ->select('acteurs.*')
                ->get();
        $genres = DB::table('shows')
                ->join('appartenances', 'appartenances.show_id', '=', 'shows.id' )
                ->join('genres', 'appartenances.genre_id', '=', 'genres.id')
                ->where('shows.id', $id_show)
                ->select('genres.*')
                ->get();
        // echo "<script>console.log('Debug Objects: " . $show. "' );</script>";
        return view('show', compact('show', 'acteurs', 'genres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Show  $show
     * @return \Illuminate\Http\Response
     */
    public function edit(Show $show)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShowRequest  $request
     * @param  \App\Models\Show  $show
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShowRequest $request, Show $show)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Show  $show
     * @return \Illuminate\Http\Response
     */
    public function destroy(Show $show)
    {
        //
    }
}
