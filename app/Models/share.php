<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;
use App\Models\User;

class Share extends Model
{
    use HasFactory;    
    /**
    * Get 
    */
    public function tasks()
    {
        return $this->belongsToMany(Task::class);
<<<<<<< HEAD
    }    
=======
    } 
>>>>>>> c032df60d38480138c0320c935045594034e4ce1
    /**
    * Get 
    */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
