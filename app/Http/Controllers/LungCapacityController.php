<?php

namespace App\Http\Controllers;

use App\Http\Requests\LungcapacityRequest;
use App\Models\User;
use App\Models\LungCapacity;
use Illuminate\Http\Request;

class LungCapacityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $lungCapacities = LungCapacity::paginate();

        return view('lungcapacity.index', compact('lungCapacities','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        return view('lungcapacity.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LungcapacityRequest $request, User $user)
    {
        $validated = $request->validated();
        $validated['user_id'] = $user->id;
        $lungCapacity = LungCapacity::create($validated);

        return redirect()->route('users.show', $user);
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
    public function destroy(User $user,LungCapacity $lungcapacity )
    {
        $lungcapacity->delete();

        return redirect()->route('users.lungcapacities.index', $user);
    }
}
