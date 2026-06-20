<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'excerpt',
        'body',
        'featured_image',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($post) {
            if (empty($post->slug)) {
                $base = Str::slug($post->title);
                $slug = $base;
                $i = 1;

                while (
                    static::where('slug', $slug)
                        ->where('id', '!=', $post->id)
                        ->exists()
                ) {
                    $slug = $base . '-' . $i++;
                }

                $post->slug = $slug;
            }
        });
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    public function readingTime(): string
    {
        $words = str_word_count(strip_tags($this->body));
        $minutes = max(1, (int) ceil($words / 200));

        return $minutes . ' min read';
    }
}