<?php

namespace App\Http\Controllers\Api;

use App\Enums\PostStatus;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;


class PostController extends Controller
{
    /**
     * Display a listing of published posts.
     */
    public function index()
    {
        $posts = Post::where('status', PostStatus::PUBLISHED)
            ->with('admin')
            ->latest()
            ->paginate(10);

        return PostResource::collection($posts);
    }

    /**
     * Display the specified published post by slug.
     */
    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)
            ->where('status', PostStatus::PUBLISHED)
            ->with('admin')
            ->firstOrFail();

        return new PostResource($post);
    }
}
