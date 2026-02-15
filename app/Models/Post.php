<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'excerpt',
        'seo_title',
        'seo_description',
        'seo_image',
        'published_at',
        'is_published',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];
}
