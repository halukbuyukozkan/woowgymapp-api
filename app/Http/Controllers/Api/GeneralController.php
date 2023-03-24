<?php

namespace App\Http\Controllers\Api;

use App\Models\General;
use App\Http\Controllers\Controller;
use App\Http\Requests\GeneralRequest;


class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $general = General::paginate();

        return $general;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GeneralRequest $request)
    {
        $validated = $request->validated();

        $general = General::create($validated);


        return response()->json([
            'message' => 'General features created successfully',
            'general' => $general,
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
    public function update(GeneralRequest $request, General $general)
    {
        $validated = $request->validated();

        $general->update($validated);

        return response()->json([
            'message' => 'General features updated successfully.',
            'general' => $general,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(General $general)
    {
        $general->delete();

        return response()->json([
            'message' => 'General features deleted successfully.',

        ]);
    }
}
