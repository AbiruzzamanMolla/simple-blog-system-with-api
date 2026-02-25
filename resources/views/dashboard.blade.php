<x-layouts.app>
    <x-slot name="header">
        <h2 class="h4 fw-bold mb-0">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <p class="mb-0">{{ __("You're logged in!") }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
