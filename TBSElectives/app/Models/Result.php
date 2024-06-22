<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = ['match_id', 'participant_id', 'score'];

    // A result belongs to a match
    public function match()
    {
        return $this->belongsTo(Matches::class);
    }

    // A result belongs to a participant
    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }
}
