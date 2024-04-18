<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'fname',
        'lname',
        'age',
        'shirt_number',
        'imageURL',
        'country',
        'team_id',
    ];

    public function teams(){
        return $this -> belongsTo(Team::class);
    }
}
