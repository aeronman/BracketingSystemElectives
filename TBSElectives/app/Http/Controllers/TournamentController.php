<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $tournaments = Tournament::all();
        return view('tournaments.index', compact('tournaments'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('tournaments.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Tournament::create($request->all());

        return redirect()->route('tournaments.index')
            ->with('success', 'Tournament created successfully.');
    }

    // Display the specified resource.
    public function show(Tournament $tournament)
    {
        return view('tournaments.show', compact('tournament'));
    }

    // Show the form for editing the specified resource.
    public function edit(Tournament $tournament)
    {
        return view('tournaments.edit', compact('tournament'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Tournament $tournament)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $tournament->update($request->all());

        return redirect()->route('tournaments.index')
            ->with('success', 'Tournament updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Tournament $tournament)
    {
        $tournament->delete();

        return redirect()->route('tournaments.index')
            ->with('success', 'Tournament deleted successfully.');
    }
}
