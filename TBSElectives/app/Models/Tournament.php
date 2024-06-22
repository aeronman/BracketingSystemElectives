<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = ['name', 'description'];

    // A tournament has many participants
    public function participants()
    {
        return $this->hasMany(Participant::class);
    }

    // A tournament has many matches
    public function matches()
    {
        return $this->hasMany(Matches::class);
    }
}
