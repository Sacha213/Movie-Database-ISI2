<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActeurRequest;
use App\Http\Requests\UpdateActeurRequest;
use App\Models\Acteur;
use DB;

class ActeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreActeurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActeurRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acteur  $acteur
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $shows = DB::table('shows')
          ->join('participations', 'shows.id', '=', 'participations.show_id')
          ->join('acteurs', 'acteurs.id', '=', 'participations.acteur_id')
          ->where('acteurs.id', $id)
          ->select('shows.*','acteurs.cast')
          ->get();

        return view('acteurs', compact('shows'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acteur  $acteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Acteur $acteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActeurRequest  $request
     * @param  \App\Models\Acteur  $acteur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActeurRequest $request, Acteur $acteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acteur  $acteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acteur $acteur)
    {
        //
    }
}
