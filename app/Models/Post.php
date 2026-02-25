<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($post) {
            $post->slug = \Illuminate\Support\Str::slug($post->title) . '-' . uniqid();
        });
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
