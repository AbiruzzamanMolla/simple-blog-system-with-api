<section>
    <header class="mb-4">
        <h5 class="fw-bold text-danger">
            {{ __('Delete Account') }}
        </h5>

        <p class="text-muted small">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted.') }}
        </p>
    </header>

    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeletionModal">
        {{ __('Delete Account') }}
    </button>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="confirmDeletionModal" tabindex="-1" aria-labelledby="confirmDeletionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <form method="post" action="{{ route('profile.destroy') }}" class="modal-content">
                @csrf
                @method('delete')

                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeletionModalLabel">{{ __('Confirm Account Deletion') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <p>{{ __('Are you sure you want to delete your account?') }}</p>
                    <p class="text-muted small">
                        {{ __('Please enter your password to confirm you would like to permanently delete your account.') }}
                    </p>

                    <div class="mt-3">
                        <x-input-label for="password" value="{{ __('Password') }}" class="visually-hidden" />
                        <x-text-input id="password" name="password" type="password"
                            placeholder="{{ __('Password') }}" />
                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-1" />
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                    <button type="submit" class="btn btn-danger">
                        {{ __('Delete Account') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    @if ($errors->userDeletion->isNotEmpty())
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                const modal = new bootstrap.Modal(document.getElementById('confirmDeletionModal'));
                modal.show();
            });
        </script>
    @endif
</section>
