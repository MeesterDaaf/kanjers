<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->belongsToMany('App\User', 'users_projects');
    }

    public function manager()
    {
        return $this->belongsTo('App\User', 'users_projects', 'manager');
    }
}
