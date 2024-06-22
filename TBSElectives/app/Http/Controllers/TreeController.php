<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use Illuminate\Http\Request;

class TreeController extends Controller
{
    public function showTree()
    {
        // For simplicity, assume a single-elimination tournament
        // Fetch matches and organize them in a tree-like structure
        $matches = Matches::orderBy('round_number')->orderBy('match_number')->get();

        // Group matches by round number
        $groupedMatches = $matches->groupBy('round_number');

        return view('tree.index', compact('groupedMatches'));
    }
}
