<?php

namespace App\Http\Controllers;

use App\Models\League;
use App\Http\Requests\StoreLeagueRequest;
use App\Http\Requests\UpdateLeagueRequest;
use Illuminate\Support\Facades\Session;

class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('leagues.index', ['leagues' => League::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('leagues.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLeagueRequest $request)
    {
        League::create($request->validated());

        Session::flash('success', 'League added successfully');
        return redirect()->route('leagues.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(League $league)
    {
        return view('leagues.show', compact('league'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(League $league)
    {
        return view('leagues.edit', compact('league'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLeagueRequest $request, League $league)
    {
        $league->update($request->validated());

        Session::flash('success', 'League updated successfully');
        return redirect()->route('leagues.show', $league->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id)
    {
        League::destroy($id);
        Session::flash('success', 'League trashed successfully');
        return redirect()->route('leagues.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(League $league)
    {
        //
    }
}
