<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'hero_title',
        'hero_image',
        'body_content',
        'process_title',
        'process_subtitle',
        'process_steps',
        'seo_title',
        'seo_description',
        'seo_image',
        'is_active',
        'show_in_menu',
        'category_id',
        'published_at',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'show_in_menu' => 'boolean',
        'published_at' => 'datetime',
        'body_content' => 'array',
        'process_steps' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function leads()
    {
        return $this->hasMany(Lead::class);
    }
}
