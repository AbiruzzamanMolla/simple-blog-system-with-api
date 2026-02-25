<div class="mb-3">
    <x-input-label for="title" :value="__('Post Title')" />
    <x-text-input id="title" name="title" type="text" :value="old('title', $post->title ?? '')" required autofocus />
    <x-input-error :messages="$errors->get('title')" class="mt-1" />
</div>

<div class="mb-3">
    <x-input-label for="content" :value="__('Content')" />
    <textarea id="content" name="content" class="form-control" rows="10" required>{{ old('content', $post->content ?? '') }}</textarea>
    <x-input-error :messages="$errors->get('content')" class="mt-1" />
</div>

<div class="mb-3">
    <x-input-label for="status" :value="__('Status')" />
    <select id="status" name="status" class="form-select" required>
        @foreach (\App\Enums\PostStatus::cases() as $status)
            <option value="{{ $status->value }}"
                {{ old('status', $post->status->value ?? '') === $status->value ? 'selected' : '' }}>
                {{ $status->label() }}
            </option>
        @endforeach
    </select>
    <x-input-error :messages="$errors->get('status')" class="mt-1" />
</div>

<div class="d-flex justify-content-end gap-2">
    <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">Cancel</a>
    <x-primary-button>{{ isset($post) ? __('Update Post') : __('Create Post') }}</x-primary-button>
</div>
