@extends('layouts.client.master')

@section('content')
    <div class="container py-md-5"></div>
    <div class="container-fluid py-5 mb-0 text-dark">
        <div class="row mb-5 mx-4">
            <h1 class="h1 text-primary">About</h1>
            <hr />
        </div>

        <div class="row mb-3">
            <!-- About Start -->
            <div class="container-xxl py-5">
                <div class="container py-5 px-lg-5">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                            {{-- <p class="section-title text-secondary">About Us<span></span></p> --}}
                            <h1 class="mb-5">Welcome to Jharnirbhar, your trusted for all your DoorOn service needs!</h1>
                            <p class="mb-4"> At Jharnirbhar, we understand the importance of a well-maintained home. Whether it's a leaky faucet, a malfunctioning appliance, or a much-needed home renovation, we're here to make your life easier. Our mission is simple: to provide reliable, efficient, and affordable home services to homeowners everywhere.<br/>
                                
                                With a team of skilled professionals and a commitment to excellence, we strive to exceed your expectations with every service we offer. From plumbing and electrical work to carpentry and painting, we have the expertise to handle any task, big or small.<br>
                                
                                What sets us apart is our dedication to customer satisfaction. We believe in clear communication, transparent pricing, and attention to detail. When you choose Jharnirbhar, you can trust that your home is in good hands.<br>
                                
                                But our commitment doesn't stop there. We also believe in giving back to the community. That's why a portion of every service booking goes towards initiatives that support local families in need.<br>
                                
                                Thank you for considering Jharnirbhar for your home service needs. We look forward to serving you and helping you create the home of your dreams.<br>`
                                
                                Welcome to the Jharnirbhar family!</p>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Client Satification</p>
                                    <p class="mb-2">85%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">JOb seeker & Job Provider</p>
                                    <p class="mb-2">90%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Freelancer</p>
                                    <p class="mb-2">95%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            {{-- <a href="" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a> --}}
                        </div>
                        <div class="col-lg-6">
                            <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{asset('client/img/about.png')}}">
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->
        </div>
    </div>
@endsection
