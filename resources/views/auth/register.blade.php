@extends('layouts.client.master')

@section('content')
    <div class="container-fluid bg-primary hero-header mb-0">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <div class="col-md-6 wow fadeInUp">
                    <img src="{{ asset('client/img/register.png') }}" class="img-fluid d-none d-md-block" alt="">
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-delay="0.2s">
                    <h3 class="h2 text-secondary text-center mb-5">Register</h3>
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="form-floating mb-4">
                            <select class="form-control" name="role">
                                <option value="0">Freelancer</option>
                                {{-- <option value="3">Job Seeker</option>
                                <option value="2">Job Provider</option> --}}
                            </select>
                            <label for="role">Select User Type</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                            <label for="name">Full Name</label>
                            @error('name')
                                <span class="text-danger">
                                    *{{ $message }}
                                </span>
                            @enderror
                        </div>
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
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" name="password_confirmation"
                                placeholder="Confirm Password" required>
                            <label for="password_confirmation">Confirm Password</label>
                        </div>

                        {{-- captcha --}}
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="captcha" placeholder="Captcha"
                                        required>
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
                        </div>

                        <div class="text-center mb-4">
                            <a class="text-white" href="{{ route('login') }}">Already have an account?</a>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info px-5 py-2">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Register end  -->
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
