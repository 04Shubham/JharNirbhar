@extends('layouts.client.master')

@section('content')
    <div class="container-fluid bg-primary hero-header mb-0">
        <div class="container-fluid ">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h4 class="text-secondary text-center mb-3">{{ __('Verify Your Email Address') }}</h4>
                    <div class="card">

                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif

                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }},
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <br />
                                <button type="submit"
                                    class="btn btn-link p-0 mt-2 align-baseline">{{ __('click here to request another') }}</button>.
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
