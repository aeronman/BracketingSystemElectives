<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use App\Models\Tournament;
use App\Models\Participant;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $matches = Matches::with(['tournament', 'participant1', 'participant2', 'winner'])->get();
        return view('matches.index', compact('matches'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        $tournaments = Tournament::all();
        $participants = Participant::all();
        return view('matches.create', compact('tournaments', 'participants'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'tournament_id' => 'required|exists:tournaments,id',
            'round_number' => 'required|integer',
            'match_number' => 'required|integer',
            'participant1_id' => 'required|exists:participants,id',
            'participant2_id' => 'required|exists:participants,id',
            'winner_id' => 'nullable|exists:participants,id',
        ]);

        Matches::create($request->all());

        return redirect()->route('matches.index')
            ->with('success', 'Match created successfully.');
    }

    // Display the specified resource.
    public function show(Matches $match)
    {
        return view('matches.show', compact('match'));
    }

    // Show the form for editing the specified resource.
    public function edit(Matches $match)
    {
        $tournaments = Tournament::all();
        $participants = Participant::all();
        return view('matches.edit', compact('match', 'tournaments', 'participants'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Matches $match)
    {
        $request->validate([
            'tournament_id' => 'required|exists:tournaments,id',
            'round_number' => 'required|integer',
            'match_number' => 'required|integer',
            'participant1_id' => 'required|exists:participants,id',
            'participant2_id' => 'required|exists:participants,id',
            'winner_id' => 'nullable|exists:participants,id',
        ]);

        $match->update($request->all());

        return redirect()->route('matches.index')
            ->with('success', 'Match updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Matches $match)
    {
        $match->delete();

        return redirect()->route('matches.index')
            ->with('success', 'Match deleted successfully.');
    }
}
