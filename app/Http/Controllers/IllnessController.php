<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Illness;
use App\Models\IllnessType;
use Illuminate\Http\Request;
use App\Http\Requests\IllnessRequest;

class IllnessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $illnesses = Illness::with('illnessType')->paginate();

        return view('illnesses.index', compact('illnesses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $illnessTypes = IllnessType::all();

        return view('illnesses.create', compact('user', 'illnessTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IllnessRequest $request)
    {
        $validated = $request->validated();

        $illness = Illness::create($validated);

        return redirect()->route('illnesses.index');
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
    public function edit(Illness $illness)
    {
        $illnessTypes = IllnessType::all();

        return view('illnesses.edit', compact('illness', 'illnessTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IllnessRequest $request, Illness $illness)
    {
        $illness->update($request->validated());

        return redirect()->route('illnesses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Illness $illness)
    {
        $illness->delete();

        return redirect()->route('illnesses.index');
    }
}
