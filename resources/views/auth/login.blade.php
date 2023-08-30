{{-- auth login style --}}
<link rel="stylesheet" href="{{ asset('template/assets/css/main/app.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/css/pages/auth.css') }}">
<link rel="shortcut icon" href="{{ asset('template/assets/images/logo/joy.png') }}" type="image/x-icon">
<link rel="shortcut icon" href="{{ asset('template/assets/images/logo/joy.png') }}" type="image/png">

<div id="auth">
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="{{ route('login') }}"><img src="{{ asset('template/assets/images/logo/joy.png') }}"
                            alt="Logo"></a>
                </div>
                <h1 class="auth-title">Log in.</h1>
                <p class="auth-subtitle mb-5">Masuk dengan role yang sudah diberikan.</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" id="email"
                            class="form-control form-control-xl @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" id="password"
                            class="form-control form-control-xl @error('password') is-invalid @enderror" name="password"
                            required autocomplete="current-password" placeholder="Password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-check form-check-lg d-flex align-items-end">
                        <input class="form-check-input me-2" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label text-gray-600" for="remember">
                            Keep me logged in
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                </form>
                {{-- <div class="text-center mt-5 text-lg fs-4">
                    <p class="text-gray-600">Don't have an account? <a href="{{ route('register') }}"
                            class="font-bold">Sign up</a>.</p>
                    <p><a class="font-bold" href="{{ route('password.request') }}">Forgot password?</a>.</p>
                </div> --}}
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">
            </div>
        </div>
    </div>
</div>
