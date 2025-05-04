@extends('layouts.app')

@section('content')

@include('includes.header')

<style>

    .image img{
        min-height: 330px;
        /* min-width: 350px; */
        border-radius: 20px;
    }

@media (max-width: 450px) {
    .image {
        min-height: 150px;
    }
}

</style>


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Service</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="/">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Service</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Services Start -->
    <div class="container-fluid bg-light py-6 px-5 image">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">Our Mining Services</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="assets/img/Geology.webp" alt="">
                    <div class="service-icon">
                        {{-- <i class="fa fa-3x fa-building text-primary"></i> --}}
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Exploration Services</h4>
                            <div class="row gx-5 py-2">
                            <div class="col mb-2">
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Safety First</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Environmental Responsibility</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Technological Innovation</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Community Partnership</p>
                            </div>
                        </div>
                        <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="assets/img/portfolio-2.jpg" alt="">
                    <div class="service-icon">
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Mine Development and Operations</h4>
                            <div class="row gx-5 py-2">
                                <div class="col mb-2">
                                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Mine Design and Planning</p>
                                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Infrastructure Development</p>
                                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Equipment Selection and Procurement</p>
                                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Production Optimization</p>
                                    <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Operational Management and Support</p>
                                </div>
                            </div>
                        <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="assets/img/Ghana-Manganese.jpg" alt="">
                    <div class="service-icon">
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Processing and Refinement</h4>
                        <div class="row gx-5 py-2">
                            <div class="col mb-2">
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Crushing and Grinding Solutions</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Mineral Separation and Concentration</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Hydrometallurgical Processing</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Pyrometallurgical Solutions</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Quality Control and Product Specifications</p>
                            </div>
                        </div>
                        <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="assets/img/portfolio-4.jpg" alt="">
                    <div class="service-icon">
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Environmental Management</h4>
                        <div class="row gx-5 py-2">
                            <div class="col mb-2">
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Environmental Impact Assessments</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Water Management and Treatment</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Emissions Control and Monitoring</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Land Reclamation and Rehabilitation</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Biodiversity Conservation Programs</p>
                            </div>
                        </div>
                        <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="assets/img/digital-transformation-mining.jpeg" alt="">
                    <div class="service-icon">
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Technology and Innovation</h4>
                        <div class="row gx-5 py-2">
                            <div class="col mb-2">
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Autonomous Mining Systems</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Digital Twin Technology</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>AI and Machine Learning Applications</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Remote Operations Centers</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Predictive Maintenance Solutions</p>
                            </div>
                        </div>
                        <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Appointment Start -->
    {{-- <div class="container-fluid py-6 px-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="display-5 text-uppercase mb-4">Request A <span class="text-primary">Call Back</span></h1>
                    </div>
                    <p class="mb-5">Nonumy ipsum amet tempor takimata vero ea elitr. Diam diam ut et eos duo duo sed. Lorem elitr sadipscing eos et ut et stet justo, sit dolore et voluptua labore. Ipsum erat et ea ipsum magna sadipscing lorem. Sit lorem sea sanctus eos. Sanctus sit tempor dolores ipsum stet justo sit erat ea, sed diam sanctus takimata sit. Et at voluptua amet erat justo amet ea ipsum eos, eirmod accusam sea sed ipsum kasd ut.</p>
                    <a class="btn btn-primary py-3 px-5" href="">Get A Quote</a>
                </div>
                <div class="col-lg-8">
                    <div class="bg-light text-center p-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Call Back Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Call Back Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div> --}}
    <!-- Appointment End -->


    <!-- Testimonial Start -->
    {{-- <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">What Our <span class="text-primary">Happy Cleints</span> Say!!!</h1>
        </div>
        <div class="row gx-0 align-items-center">
            <div class="col-xl-4 col-lg-5 d-none d-lg-block">
                <img class="img-fluid w-100 h-100" src="assets/img/testimonial.jpg">
            </div>
            <div class="col-xl-8 col-lg-7 col-md-12">
                <div class="testimonial bg-light">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="row gx-4 align-items-center">
                            <div class="col-xl-4 col-lg-5 col-md-5">
                                <img class="img-fluid w-100 h-100 bg-light p-lg-3 mb-4 mb-md-0" src="assets/img/testimonial-1.jpg" alt="">
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-7">
                                <h4 class="text-uppercase mb-0">Client Name</h4>
                                <p>Profession</p>
                                <p class="fs-5 mb-0"><i class="fa fa-2x fa-quote-left text-primary me-2"></i> Dolores sed duo
                                    clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                                    lorem magna ut labore et tempor diam tempor erat. Erat dolor rebum sit
                                    ipsum.</p>
                            </div>
                        </div>
                        <div class="row gx-4 align-items-center">
                            <div class="col-xl-4 col-lg-5 col-md-5">
                                <img class="img-fluid w-100 h-100 bg-light p-lg-3 mb-4 mb-md-0" src="assets/img/testimonial-2.jpg" alt="">
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-7">
                                <h4 class="text-uppercase mb-0">Client Name</h4>
                                <p>Profession</p>
                                <p class="fs-5 mb-0"><i class="fa fa-2x fa-quote-left text-primary me-2"></i> Dolores sed duo
                                    clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                                    lorem magna ut labore et tempor diam tempor erat. Erat dolor rebum sit
                                    ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->


    <!-- Footer Start -->
    @include('includes.footer')
    <!-- Footer End -->


 @endsection