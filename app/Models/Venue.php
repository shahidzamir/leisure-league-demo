<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];
    
    
    
        
    public function leagues()
    {
        return $this->hasMany(League::class, 'venue_id', 'id');
    }


}
