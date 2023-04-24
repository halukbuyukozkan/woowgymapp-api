<?php

namespace App\Http\Controllers;

use App\Models\Parq;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\ParqRequest;
use App\Models\Illness;

class ParqController extends Controller
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
    public function create(User $user)
    {
        $cardiovascularIllnesses = Illness::OfType(1)->get();
        $spinalIllnesses = Illness::OfType(10)->get();

        return view('parq.create', compact('user', 'cardiovascularIllnesses', 'spinalIllnesses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParqRequest $request, User $user)
    {
        $validated = $request->validated();

        $validated['user_id'] = $user->id;

        $parq = Parq::create($validated);
        
        return redirect()->route('users.bodyfats.create', $user->id);
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
    public function edit(User $user, Parq $parq)
    {
        return view('parq.edit', compact('user','parq'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ParqRequest $request, User $user , Parq $parq)
    {
        $validated = $request->validated();

        $validated['user_id'] = $user->id;

        $parq->update($validated);

        return redirect()->route('users.bodyfats.create', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
