@extends('layouts.client.master')

@section('content')
    <div class="container py-md-5"></div>
    <div class="container-fluid py-5 mb-0 text-dark">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{session('success')}}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row mb-5 mx-4">
            <h1 class="h1 text-primary">Contact</h1>
            <hr />
        </div>

        <div class="row mb-3">
            <!-- Contact Start -->
            <div class="container-xxl py-5">
                <div class="container py-5 px-lg-5">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        {{-- <p class="section-title text-secondary justify-content-center"><span></span>Contact Us<span></span></p> --}}
                        <h1 class="text-center mb-5">Contact For Any Query</h1>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="wow fadeInUp" data-wow-delay="0.5s">
                                <p class="text-center mb-4">Have a question or need assistance? Reach out to us today and
                                    let us help you with all your DoorOn service needs.</p>
                                <form action="{{ url('/contact/store') }}" method="post">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Your Name" required>
                                                <label for="name">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Your Email" required>
                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="phone"
                                                    placeholder="Your Phone" required>
                                                <label for="phone">Your Phone</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="subject"
                                                    placeholder="Subject" required>
                                                <label for="subject">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a message here" name="message" style="height: 150px" required></textarea>
                                                <label for="message">Message</label>
                                            </div>
                                        </div>
                                        <div class="col-9">
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
                                        <div class=" col-md-3 mb-2">
                                            <span class="rounded captcha-image">{!! Captcha::img() !!}</span>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->
        </div>
    </div>
@endsection
