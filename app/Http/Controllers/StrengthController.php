<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Strength;
use Illuminate\Http\Request;
use App\Http\Requests\StrengthRequest;

class StrengthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $strenghts = $user->strengths;

        return view('strength.index', compact('strenghts','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        return view('strength.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StrengthRequest $request, User $user)
    {
        $validated = $request->validated();
        $validated['user_id'] = $user->id;

        $strength = Strength::create($validated);

        return redirect()->route('users.strengths.index', $strength->user_id);
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
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Strength $strenght)
    {
        $strenght->delete();

        return redirect()->route('strength.index', $strenght->user_id);
    }
}
