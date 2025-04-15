<?php

namespace App\Models;

use App\Models\Job;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Prunable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;
    use Prunable;

    public function jobs(): BelongsToMany
    {
        return $this->belongsToMany(Job::class);
    }

    public function prunable()
    {
        return $this->doesntHave('jobs');
    }

}
