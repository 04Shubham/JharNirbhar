@extends('layouts.client.master')

@section('content')
    <div class="container py-md-5"></div>
    <div class="container-fluid py-5 mb-0 text-dark">
        <div class="row mb-5 mx-4">
            <h1 class="h1 text-primary">FAQs</h1>
            <hr />
        </div>

        <div class="row mb-3">
            <div class="col-md-8">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is Jharnirbhar?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Jharnirbhar is a versatile platform designed to connect freelancers, job providers, and job seekers, facilitating seamless interactions and opportunities. Our mission is to provide a robust ecosystem where:
                                    <br/>
                                    Freelancers can showcase their skills, find exciting projects, and grow their careers.<br/>
                                    Job Providers can easily post job listings and find talented professionals to meet their needs.<br/>
                                    Job Seekers can explore job opportunities, apply for positions, and advance their careers.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How do I create an account?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Click on the ‘Get Start’ button on the homepage and follow the registration instructions.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What should I do if I encounter a technical issue on the site?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Contact technical support at [+91 9128117899] detailing the issue you are facing.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
@endsection
