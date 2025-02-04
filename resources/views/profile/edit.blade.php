<x-app-layout>
    <x-slot name="header">
        <div class="container">
        <h2 class="h4 text-dark">
            {{ __('Profile') }}
        </h2>
        </div>
    </x-slot>

    <div class="py-4">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-8 offset-md-2 bg-white shadow-sm rounded p-4">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-8 offset-md-2 bg-white shadow-sm rounded p-4">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-8 offset-md-2 bg-white shadow-sm rounded p-4">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>