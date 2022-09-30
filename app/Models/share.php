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
    }    
    /**
    * Get 
    */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
