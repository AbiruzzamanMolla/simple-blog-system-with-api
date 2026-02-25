<x-layouts.guest>
    <div class="py-5">
        <h1 class="display-4 fw-bold text-center mb-5">Simple Blog</h1>

        <div class="row g-4">
            @forelse($posts as $post)
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $post->title }}</h5>
                            <p class="card-text text-muted small">
                                By {{ $post->admin->name }} on {{ $post->created_at->format('M d, Y') }}
                            </p>
                            <p class="card-text">
                                {{ Str::limit(strip_tags($post->content), 120) }}
                            </p>
                            <a href="{{ route('posts.show', $post->slug) }}"
                                class="btn btn-outline-primary btn-sm mt-auto">Read More</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted">No posts published yet. Stay tuned!</p>
                </div>
            @endforelse
        </div>

        <div class="mt-5">
            {{ $posts->links() }}
        </div>
    </div>
</x-layouts.guest>
