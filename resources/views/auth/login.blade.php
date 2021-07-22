@extends('layout.app')
@section('title','Login')
@section('konten')
<section class="section">
    <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
            <div class="p-4 m-3">
                <img src="stisla/assets/img/stisla-fill.svg" alt="logo" width="80"
                    class="shadow-light rounded-circle mb-5 mt-2">
                <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Read-It</span></h4>
                <p class="text-muted">Before you get started, you must login or register if you don't already have an
                    account.</p>
                <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" tabindex="1" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required autofocus>
                        @error('email') <div class="alert alert-danger mt-2"> {{ $message }} </div> @enderror
                        <div class="invalid-feedback">
                            Masukkan Email
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">Password</label>
                        </div>
                        <input id="password" type="password" name="password" tabindex="2" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" required>
                        @error('password') <div class="alert alert-danger mt-2"> {{ $message }} </div> @enderror
                        <div class="invalid-feedback">
                            Masukkan Password
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                id="remember-me">
                            <label class="custom-control-label" for="remember-me">Ingat Saya</label>
                        </div>
                    </div>

                    <div class="form-group text-right">
                        <a href="auth-forgot-password.html" class="float-left mt-3">
                            Lupa Password?
                        </a>
                        <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                            Login
                        </button>
                    </div>

                    <div class="mt-5 text-center">
                        Belum punya akun? <a href="{{ route('register') }}">Buat akun baru</a>
                    </div>
                </form>

                <div class="text-center mt-5 text-small">
                    Copyright &copy; Your Company. Made with 💙 by Stisla
                    <div class="mt-2">
                        <a href="#">Privacy Policy</a>
                        <div class="bullet"></div>
                        <a href="#">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
            data-background="stisla/assets/img/unsplash/library.jpg">
            <div class="absolute-bottom-left index-2">
                <div class="text-light p-5 pb-2">
                    <div class="mb-5 pb-3">
                        <h1 class="mb-2 display-4 font-weight-bold">Good Morning</h1>
                        <h5 class="font-weight-normal text-muted-transparent">Seattle, Washington DC</h5>
                    </div>
                    Photo by <a class="text-light bb" target="_blank"
                        href="https://unsplash.com/photos/1emWndlDHs0">Shunya Koide</a> on <a class="text-light bb"
                        target="_blank" href="https://unsplash.com">Unsplash</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
