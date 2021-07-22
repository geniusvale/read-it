@extends('layout.app')
@section('title','Register')
@section('konten')
<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                <div class="login-brand">
                    <img src="stisla/assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                </div>

                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" autofocus>
                                    @error('name') <div class="alert alert-danger mt-2"> {{ $message }} </div> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
                                @error('email') <div class="alert alert-danger mt-2"> {{ $message }} </div> @enderror
                                <div class="invalid-feedback">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="password" class="d-block">Password</label>
                                    <input id="password" type="password" class="form-control pwstrength"
                                        data-indicator="pwindicator" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror">
                                    @error('password') <div class="alert alert-danger mt-2"> {{ $message }} </div> @enderror
                                    <div id="pwindicator" class="pwindicator">
                                        <div class="bar"></div>
                                        <div class="label"></div>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="d-block">Password Confirmation</label>
                                    <input type="password" class="form-control" name="password_confirmation">
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="simple-footer">
                    Copyright &copy; Stisla 2018
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
