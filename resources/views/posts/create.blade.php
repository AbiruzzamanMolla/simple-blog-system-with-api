<x-layouts.app>
    <x-slot name="header">
        <h2 class="h4 fw-bold mb-0">{{ __('Create New Post') }}</h2>
    </x-slot>

    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        @include('posts.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
