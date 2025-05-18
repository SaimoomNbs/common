<!-- <section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}" />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section> -->

<form method="post" action="{{ route('profile.destroy') }}" class="">
    @csrf
    @method('delete')
    <div class="card mt-4" id="delete">
        <div class="card-header pb-0">
            <h5>Delete Account</h5>
            <p class="text-sm mb-0">Once you delete your account, there is no going back. Please be certain.</p>
        </div>
        <div class="card-body pt-0">
            <label class="form-label">Confirm password</label>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="New password" onfocus="focused(this)" onfocusout="defocused(this)">
            </div>
            <div class="d-sm-flex ">
                <div class="d-flex align-items-center mb-sm-0 mb-4">
                    <div>
                        <div class="form-check form-switch mb-0">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault0">
                        </div>
                    </div>
                    <div class="ms-2">
                        <span class="text-dark font-weight-bold d-block text-sm">Confirm</span>
                        <span class="text-xs d-block">I want to delete my account.</span>
                    </div>
                </div>
                <button class="btn bg-gradient-danger mb-0 ms-auto" type="submit" name="button">Delete Account</button>
                <!-- <button class="btn bg-gradient-danger mb-0 ms-2" type="submit" name="button">Delete Account</button> -->
            </div>
            
        </div>
    </div>
</form>