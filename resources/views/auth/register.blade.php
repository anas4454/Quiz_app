<x-login.login>



    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <label class="form-label fw-semibold">Full Name</label>
            <input type="text" name="name" value="{{ old('name') }}"
                class="form-control rounded-3 @error('name') is-invalid @enderror" placeholder="Enter your full name"
                required autofocus>

            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label class="form-label fw-semibold">Email Address</label>
            <input type="email" name="email" value="{{ old('email') }}"
                class="form-control rounded-3 @error('email') is-invalid @enderror" placeholder="Enter your email"
                required>

            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label class="form-label fw-semibold">Password</label>
            <input type="password" name="password"
                class="form-control rounded-3 @error('password') is-invalid @enderror" placeholder="Create password"
                required>

            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <label class="form-label fw-semibold">Confirm Password</label>
            <input type="password" name="password_confirmation"
                class="form-control rounded-3 @error('password_confirmation') is-invalid @enderror"
                placeholder="Confirm password" required>

            @error('password_confirmation')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Buttons -->
        <div class="d-flex justify-content-between align-items-center">

            <a href="{{ route('login') }}" class="text-decoration-none small text-primary">
                Already registered?
            </a>

            <button type="submit" class="btn btn-primary px-4 rounded-3">
                Register
            </button>

        </div>
    </form>
</x-login.login>
