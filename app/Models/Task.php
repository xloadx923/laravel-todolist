<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Share;
use App\Models\Theme;

class Task extends Model
{
    use HasFactory;

    /**
    * Get .
    */
    public function themes()
    {
        return $this->belongsToMany(Theme::class);
    }    
    /**
    * Get .
    */
    public function shares()
    {
        return $this->belongsToMany(Share::class);
    }
    /**
    * Get .
    */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
