<?php

namespace App\Http\Controllers;

use App\Models\Parq;
use Illuminate\Http\Request;
use App\Http\Requests\ParqRequest;

class ParqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parqs = Parq::paginate();
        return $parqs;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParqRequest $request)
    {
        $validated = $request->validated();

        $parq = Parq::create($validated);

        return response()->json([
            'success' => true,
            'bodyfat' => $parq,
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
    public function update(ParqRequest $request, Parq $parq)
    {
        $validated = $request->validated();

        $parq->update($validated);

        return response()->json([
            'success'=>true,
            'parq'=>$parq,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parq $parq)
    {
        $parq->delete();

        return response()->json([
            'success' => true,
        ]);
    }
}
