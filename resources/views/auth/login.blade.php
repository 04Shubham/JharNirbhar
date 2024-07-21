@extends('layouts.client.master')
@section('content')
    <div class="container-fluid bg-primary hero-header mb-0">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <div class="col-md-6 wow fadeInUp">
                    <img src="{{ asset('client/img/login.png') }}" class="img-fluid d-none d-md-block" alt="">
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-delay="0.2s">
                    <h3 class="h2 text-secondary text-center mb-5">Login</h3>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                            <label for="email">Email Address</label>
                            @error('email')
                                <span class="text-danger">
                                    *{{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                                <span class="text-danger">
                                    *{{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="captcha" placeholder="Captcha" required>
                                    <label for="captcha">Captcha</label>
                                    @error('captcha')
                                        <span class="text-danger">
                                            *{{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span class="rounded captcha-image">{!! Captcha::img() !!}</span>
                                <button type="button" id="captchaRefresh" class="btn btn-light"><i
                                        class="fas fa-sync"></i></button>
                            </div>
                            @if ($errors->has('captcha'))
                                <div class="alert alert-danger">{{ $errors->first('captcha') }}</div>
                            @endif
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            {{-- <a class="text-white" href="{{url('/forgot-password')}}">Forgot Password?</a> --}}
                            @if (Route::has('password.request'))
                                <a class="btn btn-link text-white" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            <a class="text-white" href="{{ route('register') }}">Don't have an account?</a>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="captchaRefresh" class="btn btn-success  px-5 py-2">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Login end  -->

    <script>
        document.getElementById('captchaRefresh').addEventListener('click', function() {
            fetch('{{ url('get-new-captcha') }}')
                .then(response => response.json())
                .then(data => {
                    document.querySelector('.captcha-image').innerHTML = data.captcha;
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
@endsection
