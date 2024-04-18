<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class League extends Model
{
    use HasFactory;
    use softDeletes;
    
    protected $fillable = [
        'league_name',
        'country',
        'season',
        'start_date',
        'end_date',
        'leagueURL',
    ];

    public function teams(){
        return $this->hasMany(Team::class);
    }
}
