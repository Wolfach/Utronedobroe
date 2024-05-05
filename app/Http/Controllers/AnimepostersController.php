<?php

namespace App\Http\Controllers;

use App\Models\Animeposters;
use Illuminate\Http\Request;

class AnimepostersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Animeposters $animeposters)
    {
        // $animeposters = Animeposters::all();

        // return view('dashboard', compact('animeposters'));
 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animeposters $animeposters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animeposters $animeposters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animeposters $animeposters)
    {
        //
    }
}
