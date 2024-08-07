@extends('layouts.client.master')

@section('styles')
@endsection

@section('hero')
    <div class="container-fluid bg-primary hero-header">
        <div class="container-fluid px-lg-5">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated slideInDown">
                        Home for Freelancers and Job Seekers
                    </h1>
                    <p class="text-white pb-3 animated slideInDown">JharNirbhar provides Inteligents solutions &
                        Fullfill the needs.<br>Looking to elevate your home? Join Jharnirbhar for reliable, top-notch
                        services that turn your house into a haven. Explore our offerings and start transforming your living
                        space today</p>
                    <a href="{{ url('/register') }}"
                        class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Get Started
                    </a>
                    {{-- <a href="{{ url('/contact') }}"
                        class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">ContactUs</a> --}}
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn rounded-xl" src="{{ asset('client/img/hero.png') }}"
                        alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('loading')
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
@endsection


@section('content')
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.10s">
        <div class="container">
            <p class="section-title text-secondary justify-content-center mb-5"><span></span>Categories<span></span></p>
            <div id="owl-demo" class="owl-carousel owl-theme">
                @foreach ($categories as $category)
                    <a class="category-container p-1 mx-2 my-3" href="{{ url('/category/' . $category->slug) }}">
                        <img src="{{ asset('uploads/category/' . $category->image) }}" />
                        <h3>
                            {{ $category->title }}
                        </h3>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Newsletter Start -->
    <div class="container-fluid bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <p class="section-title text-white justify-content-center"><span></span>Newsletter<span></span></p>
                    <h1 class="text-center text-white mb-4">Stay Always In Touch</h1>
                    <p class="text-white mb-4">Enter email to recieve daily news and updates.</p>
                    <div class="position-relative w-100 mt-3">
                        <form action="{{ url('/newsletter/subscribe') }}" method="post">
                            @csrf
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                                placeholder="Enter Your Email" name="email" style="height: 48px;">
                            <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Our Team<span></span></p>
                <h1 class="text-center mb-5">Our Team Members</h1>
            </div>
            <div class="row d-flex justify-content-center  ">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded">
                        <div class="text-center border-bottom p-4">
                            <img class="img-fluid rounded-circle mb-4" src="{{ asset('client/img/team-1.jpg') }}"
                                alt="">
                            <h5>SHUBHAM KUMAR</h5>
                            <span>CEO & Founder</span>
                            {{-- <span>(Web Designer)</span> --}}
                        </div>
                        <div class="d-flex justify-content-center p-4">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light rounded">
                        <div class="text-center border-bottom p-4">
                            <img class="img-fluid rounded-circle mb-4" src="{{ asset('client/img/team-2.jpg') }}"
                                alt="">
                            <h5>KRISHNA KUMAR</h5>
                            <span>SEO Expert</span>
                        </div>
                        <div class="d-flex justify-content-center p-4">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection

{{-- @section('scripts')
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel();
        });
    </script>
@endsection --}}

@section('scripts')
    <script>
        $(document).ready(function() {

            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds

                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]

            });

        });
    </script>
@endsection
