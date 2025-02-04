<x-guest-layout>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Username -->
        <div class="mb-3">
            <label for="username" class="form-label">{{ __('Username') }}</label>
            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="form-check mb-3">
            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
            <label class="form-check-label" for="remember_me">
                {{ __('Remember me') }}
            </label>
        </div>

        <div class="d-flex justify-content-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-decoration-underline text-muted me-3" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button type="submit" class="btn btn-primary">
                {{ __('Log in') }}
            </button>
        </div>
    </form>
</x-guest-layout>