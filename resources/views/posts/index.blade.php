<x-layouts.app>
    <x-slot name="header">
        <h2 class="h4 fw-bold mb-0">{{ __('Manage Posts') }}</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm">Create New Post</a>
    </x-slot>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($posts as $post)
                        <tr>
                            <td><strong>{{ $post->title }}</strong></td>
                            <td><code class="small">{{ $post->slug }}</code></td>
                            <td>
                                <form action="{{ route('posts.toggle-status', $post) }}" method="POST"
                                    onsubmit="return confirm('Change post status?')">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="badge bg-{{ $post->status->color() }} border-0">
                                        {{ $post->status->label() }}
                                    </button>
                                </form>
                            </td>
                            <td>{{ $post->created_at->format('M d, Y') }}</td>
                            <td class="text-end">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('posts.edit', $post) }}"
                                        class="btn btn-sm btn-outline-primary">Edit</a>
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST"
                                        onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted">No posts found. Create your first
                                post today!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-4">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-layouts.app>
