@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10 d-flex flex-column align-items-center justify-content-center" style="margin-top: 20px;">
                        <div class="d-flex justify-content-center py-4">
                            <a href="/" class="logo d-flex align-items-center w-auto">
                                <img src="{{ asset('assets/images/logo/favicon.png') }}" alt="">
                                <span class="d-none d-lg-block">Pelayanan TIK</span>
                            </a>
                        </div>
                        <div class="card">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Masukan Email dan Password untuk Login</p>
                                    </div>

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email address</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend"><i
                                                        class="bi bi-envelope-at-fill"></i></span>
                                                <input type="email" name="email"
                                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                                    required>
                                                @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="password" required>
                                            @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>

                                        <div class="d-grid">
                                            <button class="btn btn-info btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit">
                                                {{ __('Login') }}
                                            </button>
                                        </div>

                                        @if (Route::has('password.request'))
                                        <div class="mb-3 text-center">
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        </div>
                                        @endif

                                        @if(session('error'))
                                        <p class="text-danger text-center">{{ session('error') }}</p>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="credits" style="margin-top: 20px;">
                            Designed by <a href="/">Tim KP-ITG</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
