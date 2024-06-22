<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Tournament;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $participants = Participant::all();
        return view('participants.index', compact('participants'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        $tournaments = Tournament::all();
        return view('participants.create', compact('tournaments'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'tournament_id' => 'required|exists:tournaments,id',
            'name' => 'required|string|max:255',
        ]);

        Participant::create($request->all());

        return redirect()->route('participants.index')
            ->with('success', 'Participant created successfully.');
    }

    // Display the specified resource.
    public function show(Participant $participant)
    {
        return view('participants.show', compact('participant'));
    }

    // Show the form for editing the specified resource.
    public function edit(Participant $participant)
    {
        $tournaments = Tournament::all();
        return view('participants.edit', compact('participant', 'tournaments'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Participant $participant)
    {
        $request->validate([
            'tournament_id' => 'required|exists:tournaments,id',
            'name' => 'required|string|max:255',
        ]);

        $participant->update($request->all());

        return redirect()->route('participants.index')
            ->with('success', 'Participant updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Participant $participant)
    {
        $participant->delete();

        return redirect()->route('participants.index')
            ->with('success', 'Participant deleted successfully.');
    }
}
