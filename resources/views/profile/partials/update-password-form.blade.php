<!-- <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section> -->
<section>
    <form method="post" action="{{ route('password.update') }}" class="mt-2 space-y-6">
        @csrf
        @method('put')
        <div class="card mt-4" id="password">
            <div class="card-header pb-0">
                <h5>Change Password</h5>
                <p class="text-sm">
                    {{ __('Ensure your account is using a long, random password to stay secure.') }}
                </p>
            </div>
            <div class="card-body pt-0">
                <label class="form-label">Current password</label>
                <div class="form-group">
                    <input class="form-control" type="password" name="current_password" placeholder="Current password" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
                <label class="form-label">New password</label>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="New password" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
                <label class="form-label">Confirm new password</label>
                <div class="form-group">
                    <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm password" onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
                <button type="submit" class="btn bg-gradient-dark float-end mt-2 mb-0">Update password</button>
            </div>
        </div>
    </form>
</section>