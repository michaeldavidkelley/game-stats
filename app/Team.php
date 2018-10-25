<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }

    public function players()
    {
        return $this->belongsToMany(User::class);
    }
}
