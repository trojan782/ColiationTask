<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task'
    ];

        /**
         * Get the user that owns the task
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function projects(): BelongsTo
        {
            return $this->belongsTo(Project::class);
        }

}
