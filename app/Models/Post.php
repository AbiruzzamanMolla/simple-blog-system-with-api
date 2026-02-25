<?php

namespace App\Models;

use App\Enums\PostStatus;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'title',
        'slug',
        'content',
        'status',
    ];

    protected $casts = [
        'status' => PostStatus::class,
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($post) {
            $post->slug = Str::slug($post->title) . '-' . uniqid();
        });
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
