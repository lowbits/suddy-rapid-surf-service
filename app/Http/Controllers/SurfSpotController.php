<?php

namespace App\Http\Controllers;

use App\Http\Resources\SurfSpotResource;
use App\Models\SurfSpot;
use Illuminate\Http\Request;

class SurfSpotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SurfSpotResource::collection(SurfSpot::all());
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
    public function show(SurfSpot $surfSpot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SurfSpot $surfSpot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SurfSpot $surfSpot)
    {
        //
    }
}
