<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'team_name',
        'foundation_date',
        'country',
        'stadium_name',
        'teamLogo',
        'league_id',
    ];

    public function leagues(){
        return $this -> belongsTo(League::class);
    }

    public function players(){
        return $this->hasMany(Player::class);
    }
}
