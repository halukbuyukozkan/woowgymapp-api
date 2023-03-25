<?php

namespace App\Http\Controllers\Api;

use App\Models\Bodyfat;
use App\Http\Controllers\Controller;
use App\Http\Requests\BodyfatRequest;

class BodyfatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bodyfats = Bodyfat::paginate();

        return $bodyfats;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BodyfatRequest $request)
    {
        $validated = $request->validated();

        $bodyfat = Bodyfat::create($validated);

        return response()->json([
            'success' => true,
            'bodyfat' => $bodyfat,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BodyfatRequest $request, Bodyfat $bodyfat)
    {
        $validated = $request->validated();

        $bodyfat->update($validated);

        return response()->json([
            'success' => true,
            'bodyfat' => $bodyfat,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bodyfat $bodyfat)
    {
        $bodyfat->delete();

        return response()->json([
            'success' => true,
        ]);
    }

    public function factory()
    {
        $bodyfat = Bodyfat::factory()->count(10)->create();

        return response()->json([
            'success' => true,
            'bodyfat' => $bodyfat,
        ]);
    }
}
