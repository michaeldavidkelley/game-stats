<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }

    public function winner()
    {
        return $this->belongsTo(Team::class, 'winner_id');
    }
}
