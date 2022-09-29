<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contain extends Model
{
    use HasFactory;

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }
    public function themes()
    {
        return $this->belongsToMany(Task::class);
    }
}
