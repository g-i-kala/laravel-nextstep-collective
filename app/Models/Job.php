<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    public function tag(string $name)
    {
        $tag = Tag::firstOrCreate(['name' => $name]);

        $this->tags()->syncWithoutDetaching($tag);
    }

    public function retag(array $tags)
    {
        $tags = collect($tags)->map(function ($tag) {
            return Tag::firstOrCreate(['name' => $tag])->id;
        });

        $this->tags()->sync($tags);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    /**
     * Scope to filter jobs by title.
     */
    public function scopeFilterByTitle($query, $title)
    {
        if (!empty($title)) {
            $query->where('title', 'like', '%' . $title . '%');
        }

        return $query;
    }

    /**
     * Scope to filter jobs by location.
     */
    public function scopeFilterByLocation($query, $location)
    {
        if (!empty($location)) {
            $query->where('location', 'like', '%' . $location . '%');
        }

        return $query;
    }
}
