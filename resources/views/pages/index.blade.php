@extends('layouts.app')

@section('content')

@include('includes.header')

<style>

    .image {
        min-height: 500px;
    }

    .latest img{
        height: 300px;
        border-radius: 20px;
    }

@media (max-width: 450px) {
    .image {
        min-height: 300px;
    }
}

</style>


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="assets/img/Ghana-Gold-WAF.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-2 text-uppercase text-white mb-md-4">Welcome to Stelin Man</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="assets/img/mining3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-2 text-uppercase text-white mb-md-4">We Are Trusted For Your Project</h1>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <h1 class="display-5 text-uppercase mb-4"><span class="text-primary">the Leader</span> in Mining Industry</h1>
                <p>At Stelin Man, we combine cutting-edge technology with sustainable practices to deliver exceptional mining services across the globe.
                     With decades of industry experience and a commitment to environmental stewardship, we provide comprehensive solutions for exploration, extraction, and processing.
                    </p>
                <div class="row gx-5 py-2">
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Safety First</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Environmental Responsibility</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Technological Innovation</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Community Partnership</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-5 pb-5 image">
                <div class="position-relative bg-dark-radial h-100 ms-5">
                    <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="assets/img/mining1.jpg" style="object-fit: cover;border-radius: 20px">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

    <!-- Services Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4"> Latest Projects</h1>
        </div>
        <div class="row g-5 latest">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="assets/img/portfolio-4.jpg" alt="">
                    <div class="service-icon">
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Sierra Mountains Copper Project</h4>
                        <p>Sustainable extraction with minimal environmental impact.</p>
                        <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="assets/img/ship.webp" alt="">
                    <div class="service-icon">
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Oceanic Basin Mineral Exploration</h4>
                        <p>Advanced seafloor mapping and resource identification.</p>
                        <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="assets/img/mining3.jpg" alt="">
                    <div class="service-icon ">
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Northern Territory Gold Mine Expansion</h4>
                        <p>Increasing production while reducing carbon footprint</p>
                        <a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light py-6 px-5">
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
    </div>
    <!-- Testimonial End -->
    

    <!-- Footer Start -->
    @include('includes.footer')
    <!-- Footer End -->


    @endsection