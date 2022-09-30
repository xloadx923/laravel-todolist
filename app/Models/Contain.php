<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;
use App\Models\Theme;

class Contain extends Model
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
    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    } 
}
