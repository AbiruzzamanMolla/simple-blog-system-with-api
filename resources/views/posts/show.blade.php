<x-layouts.guest>
    <div class="py-5">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
            </ol>
        </nav>

        <article>
            <h1 class="display-4 fw-bold mb-3">{{ $post->title }}</h1>
            <div class="text-muted mb-4 pb-4 border-bottom">
                Published on {{ $post->created_at->format('F d, Y') }} by {{ $post->admin->name }}
            </div>

            <div class="post-content fs-5 leading-relaxed">
                {!! nl2br(e($post->content)) !!}
            </div>
        </article>

        <div class="mt-5 pt-5 border-top">
            <a href="{{ route('home') }}" class="btn btn-primary">&larr; Back to Listings</a>
        </div>
    </div>
</x-layouts.guest>
