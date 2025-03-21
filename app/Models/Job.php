<?php

namespace App\Models;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    public function tag()
    {
        
    }

    public function tags()
    {
        [];
    }
    public function employer(): BelongsTo 
    {
        return $this->belongsTo(Employer::class);
    }

    
}
