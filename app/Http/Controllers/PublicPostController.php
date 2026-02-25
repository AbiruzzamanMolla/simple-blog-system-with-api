<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PublicPostController extends Controller
{
    /**
     * Display a listing of published posts.
     */
    public function index()
    {
        $posts = Post::where('status', 'published')
            ->with('admin')
            ->latest()
            ->paginate(6);

        return view('index', compact('posts'));
    }

    /**
     * Display the specified published post.
     */
    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)
            ->where('status', 'published')
            ->with('admin')
            ->firstOrFail();

        return view('posts.show', compact('post'));
    }
}
