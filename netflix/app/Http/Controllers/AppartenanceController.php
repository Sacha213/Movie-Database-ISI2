<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppartenanceRequest;
use App\Http\Requests\UpdateAppartenanceRequest;
use App\Models\Appartenance;

class AppartenanceController extends Controller
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
     * @param  \App\Http\Requests\StoreAppartenanceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAppartenanceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appartenance  $appartenance
     * @return \Illuminate\Http\Response
     */
    public function show(Appartenance $appartenance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appartenance  $appartenance
     * @return \Illuminate\Http\Response
     */
    public function edit(Appartenance $appartenance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAppartenanceRequest  $request
     * @param  \App\Models\Appartenance  $appartenance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAppartenanceRequest $request, Appartenance $appartenance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appartenance  $appartenance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appartenance $appartenance)
    {
        //
    }
}
