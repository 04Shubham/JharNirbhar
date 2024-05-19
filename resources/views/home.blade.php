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
                        Fullfill the needs.<br>Looking to elevate your home? Join Jharnirbhar for reliable, top-notch services that turn your house into a haven. Explore our offerings and start transforming your living space today</p>
                    <a href="{{ url('/register') }}"
                        class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Get Started
                    </a>
                    <a href="{{ url('/contact') }}"
                        class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">ContactUs</a>
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
    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item bg-light rounded text-center p-4">
                        <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                        <h5 class="mb-3">Customer Support</h5>
                        <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                            sed stet lorem.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-item bg-light rounded text-center p-4">
                        <i class="fa fa-3x fa-search text-primary mb-4"></i>
                        <h5 class="mb-3">Job Seeker and Job Provider</h5>
                        <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                            sed stet lorem.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-item bg-light rounded text-center p-4">
                        <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                        <h5 class="mb-3">FreeLancer</h5>
                        <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                            sed stet lorem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
   
    <!-- Facts Start -->
    <div class="container-xxl bg-primary fact py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container ">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-certificate fa-3x text-secondary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">1234</h1>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-3x text-secondary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">1234</h1>
                    <p class="text-white mb-0">Team Members</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">1234</h1>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-check fa-3x text-secondary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">1234</h1>
                    <p class="text-white mb-0">Compleate Projects</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Our Service Category<span></span></p>
                <h1 class="text-center mb-5">What Category Solutions We Provide</h1>
            </div>
            <div class="row g-4">
                
                @foreach ($categories as $category )
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column text-center rounded">
                        <img class="img-fluid w-100" src="{{ asset('uploads/category/' . $category->image) }}"
                        alt="">
                        {{-- <div class="service-icon flex-shrink-0">
                        </div> --}}
                        <h5 class="mb-3">{{$category->title}}</h5>
                        <p class="m-0">{{$category->description}}</p>
                        <a class="btn btn-square" href="{{ url('/category/' . $category->slug) }}"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Newsletter Start -->
    <div class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <p class="section-title text-white justify-content-center"><span></span>Newsletter<span></span></p>
                    <h1 class="text-center text-white mb-4">Stay Always In Touch</h1>
                    <p class="text-white mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                        Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo</p>
                    <div class="position-relative w-100 mt-3">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                            placeholder="Enter Your Email" style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                class="fa fa-paper-plane text-primary fs-4"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Projects Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Our Projects<span></span></p>
                <h1 class="text-center mb-5">Recently Addeded Services</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">Web Design</li>
                        <li class="mx-2" data-filter=".second">Graphic Design</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                @foreach ($services as $service)
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('uploads/service/' . $service->image) }}"
                                    alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ url('/service/' . $service->slug) }}" data-lightbox="portfolio"><i
                                            class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                            class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">{{ $service->title }}</p>
                                <h5 class="lh-base mb-0">{{$service->description}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-2.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="bg-light p-4">
                            <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                            <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-3.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="bg-light p-4">
                            <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                            <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-4.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="bg-light p-4">
                            <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                            <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-5.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="bg-light p-4">
                            <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                            <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/portfolio-6.jpg"
                                    data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="bg-light p-4">
                            <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                            <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Projects End -->

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
                            <span>(Web Designer)</span>
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
                            <img class="img-fluid rounded-circle mb-4" src="{{ asset('client/img/team-3.jpg') }}"
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
