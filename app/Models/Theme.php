<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contain;

class Theme extends Model
{
    use HasFactory;
    /**
    * Get .
    */
    public function contains()
    {
        return $this->belongsToMany(Contain::class);
    } 
}
