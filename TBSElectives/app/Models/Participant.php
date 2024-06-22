<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = ['tournament_id', 'name'];

    // A participant belongs to a tournament
    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    // A participant can have many matches (either as participant1 or participant2)
    public function matches1()
    {
        return $this->hasMany(Matches::class, 'participant1_id');
    }

    public function matches2()
    {
        return $this->hasMany(Matches::class, 'participant2_id');
    }

    // A participant can be the winner of many matches
    public function matchesWon()
    {
        return $this->hasMany(Matches::class, 'winner_id');
    }

    // A participant can have many results
    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
