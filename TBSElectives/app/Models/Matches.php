<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;

    protected $fillable = ['tournament_id', 'round_number', 'match_number', 'participant1_id', 'participant2_id', 'winner_id'];

    // A match belongs to a tournament
    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    // A match has two participants
    public function participant1()
    {
        return $this->belongsTo(Participant::class, 'participant1_id');
    }

    public function participant2()
    {
        return $this->belongsTo(Participant::class, 'participant2_id');
    }

    // A match has one winner
    public function winner()
    {
        return $this->belongsTo(Participant::class, 'winner_id');
    }

    // A match has many results
    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
