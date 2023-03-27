<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bodyfat;
use Illuminate\Http\Request;
use App\Http\Requests\BodyfatRequest;

class BodyfatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $bodyfats = $user->bodyfats;

        $bodyfat = $bodyfats->last();

        return view('bodyfat.index',compact('user','bodyfat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        return view('bodyfat.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BodyfatRequest $request, User $user)
    {
        $validated = $request->validated();

        $validated['user_id'] = $user->id;

        $bodyfat = Bodyfat::create($validated);

        return redirect()->route('users.bodyfat.index', $bodyfat->user_id);
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
    public function edit(User $user, Bodyfat $bodyfat)
    {
        return view('bodyfat.edit', compact('user','bodyfat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BodyfatRequest $request, User $user, Bodyfat $bodyfat)
    {
        $validated = $request->validated();

        $validated['user_id'] = $user->id;

        $bodyfat->update($validated);

        return redirect()->route('users.show', $bodyfat->user_id);
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
