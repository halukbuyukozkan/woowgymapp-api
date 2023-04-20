<?php

namespace App\Http\Controllers;

use App\Http\Requests\IllnessTypeRequest;
use App\Models\IllnessType;
use Illuminate\Http\Request;

class IllnessTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $illnessTypes = IllnessType::paginate();

        return view('illnessTypes.index', compact('illnessTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('illnessTypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IllnessTypeRequest $request)
    {
        IllnessType::create($request->validated());

        return redirect()->route('illnessTypes.index')->with('success', 'IllnessType created successfully.');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(IllnessType $illnessType)
    {
        return view('illnessTypes.edit', compact('illnessType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IllnessTypeRequest $request, IllnessType $illnessType)
    {
        $illnessType->update($request->validated());

        return redirect()->route('illnessTypes.index')->with('success', 'Illness type updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(IllnessType $illnessType)
    {
        $illnessType->delete();

        return redirect()->route('illnessTypes.index')->with('success', 'Illness type deleted successfully.');
    }
}
