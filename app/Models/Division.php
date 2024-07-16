<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    
        
    public function teams()
    {
        return $this->hasMany(Team::class, 'division_id', 'id');
    }
    
    public function league()
    {
        return $this->belongsTo(League::class);
    }

}
