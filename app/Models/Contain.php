<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use App\Models\Theme;
use App\Models\Task;

=======
use App\Models\Task;
use App\Models\Theme;
>>>>>>> c032df60d38480138c0320c935045594034e4ce1

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
