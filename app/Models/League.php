<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;
    
    
    public function divisions()
    {
        return $this->hasMany(Division::class, 'league_id', 'id');
    }
    
    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }
}
