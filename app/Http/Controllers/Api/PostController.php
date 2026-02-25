<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of published posts.
     */
    public function index()
    {
        $posts = Post::where('status', 'published')
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
            ->where('status', 'published')
            ->with('admin')
            ->firstOrFail();

        return new PostResource($post);
    }
}
