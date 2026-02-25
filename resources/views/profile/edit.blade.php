<x-layouts.app>
    <x-slot name="header">
        <h2 class="h4 fw-bold mb-0">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="card shadow-sm border-0 mb-4 text-danger border-danger border-opacity-10">
                <div class="card-body">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
