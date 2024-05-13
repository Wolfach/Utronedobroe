<?php

namespace App\Http\Controllers;

use App\Models\Animeposters;
use App\Http\Requests\StorePosters;
use Illuminate\Http\Request;

class AnimepostersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animedesc = Animeposters::orderBy('id')->get();;

        return view('dashboard', compact('animedesc'));
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
    public function store (StorePosters $request)
    {
        Animeposters::create($request->validated());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(StorePosters $animeposters)
    {
        $path = storage_path('/app/public/images/') . $image;
        
        return response()->file($path);
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
