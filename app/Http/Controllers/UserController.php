<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('generals', 'roles', 'permissions', 'bodyfats', 'parq')->get();

        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $validated = $request->validated();

        $user = User::create($validated);

        return redirect()->route('users.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $parq = $user->parq;
        $general = $user->generals->last();

        return view('user.show', compact('user', 'parq', 'general'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validated();

        $user->update($validated);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index');
    }

    public function updatePhysicalPerformanceScore(User $user)
    {
        //her verinin güncel halini alıp, toplamını alıp generals tablosuna yazıyor
        if ($user->bloodpressures->last() != null) {
            $bloodPressure = $user->bloodpressures->last()->score;
        } else {
            $bloodPressure = 0;
        }

        if ($user->fastingbloodsugars->last() != null) {
            $fastingbloodsugar = $user->fastingbloodsugars->last()->score;
        } else {
            $fastingbloodsugar = 0;
        }

        if ($user->lungcapacities->last() != null) {
            $lungCapacity = $user->lungcapacities->last()->score;
        } else {
            $lungCapacity = 0;
        }

        if ($user->mobilities->last() != null) {
            $mobility = $user->mobilities->last()->score;
        } else {
            $mobility = 0;
        }

        if ($user->strengths->last() != null) {
            $strength = $user->strengths->last()->score;
        } else {
            $strength = 0;
        }

        if ($user->maxvo2s->last() != null) {
            $maxvo2 = $user->maxvo2s->last()->score;
        } else {
            $maxvo2 = 0;
        }

        $totalscore = $bloodPressure + $fastingbloodsugar + $lungCapacity + $mobility + $strength + $maxvo2;

        $user->generals->last()->update([
            'physical_performance_score' => $totalscore
        ]);

        return redirect()->route('users.index');
    }
}
