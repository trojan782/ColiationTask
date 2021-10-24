<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $filable = [
        'user_id',
        'title',
        'description',
        'task'
    ];

    public function users() {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    /**
     * Get all of the tasks for the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
