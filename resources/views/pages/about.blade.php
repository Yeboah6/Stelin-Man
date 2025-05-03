@extends('layouts.app')

@section('content')

@include('includes.header')


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">About</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="/">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">About</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- About Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <h1 class="display-5 text-uppercase mb-4"><span class="text-primary">About</span> Stelin Man</h1>
                <p>Founded in 1985, EarthCore Mining Solutions began as a small geological consulting firm and has grown into a global leader in sustainable mining operations. 
                    Our journey has been defined by a commitment to excellence, innovation, and environmental stewardship.
                </p>
                <p class="mb-4">What started with a team of five passionate geologists has expanded to over 500 professionals operating across six continents. 
                    Throughout our evolution, we've maintained our founding principles: respect for the earth, commitment to communities, and dedication to sustainable resource development.
                </p>
            </div>
            <div class="col-lg-5 pb-5" style="min-height: 350px;">
                <div class="position-relative bg-dark-radial h-100 ms-5">
                    <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="assets/img/logo.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <h3 class="display-9 text-uppercase mb-4">Our Mission</h3>
                <p class="mb-4">
                    To extract earth's resources responsibly while creating 
                    lasting value for our clients, communities, and the environment.
                </p>
                <h3 class="display-9 text-uppercase mb-4">Our Vision</h3>
                <p class="mb-4">
                    To be the global standard for sustainable mining practices, 
                    technological innovation, and corporate responsibility in the natural resources sector.
                </p>
                <h3 class="display-9 text-uppercase mb-4">Our Values</h3>
                <div class="row gx-5 py-2">
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Integrity <span></span></p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Innovation</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Sustainability</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Community</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Excellence</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 pb-5" style="min-height: 350px;">
                <div class="position-relative bg-dark-radial h-100 ms-5">
                    <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="assets/img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>


    <!-- Team Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">OUR TEAM</h1>
            <h3 class="display-9 text-uppercase mb-4">Meet Our Leadership Team</h3>
        </div>
        <div class="row g-5">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="row g-0">
                    <div class="col-10" style="min-height: 300px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="assets/img/team-1.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                            <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-light p-4">
                            <h4 class="text">Dr. Sarah Chen</h4>
                            <span>Executive Leadership</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="row g-0">
                    <div class="col-10" style="min-height: 300px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="assets/img/team-2.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                            <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-light p-4">
                            <h4 class="text">James Rodriguez</h4>
                            <span>Chief Operations Officer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="row g-0">
                    <div class="col-10" style="min-height: 300px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="assets/img/team-3.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                            <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-light p-4">
                            <h4 class="text">Dr. Marcus Okafor</h4>
                            <span>Chief Technology Officer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="row g-0">
                    <div class="col-10" style="min-height: 300px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="assets/img/team-4.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                            <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-light p-4">
                            <h4 class="text">Josh Dunn</h4>
                            <span>Painter</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container-fluid py-7 px-5">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h3 class="display-9 text-uppercase mb-4"> <h3 class="display-9 text-uppercase mb-4">Department Directors</h3></h3>
            </div>
            <div class="row g-5">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10" style="min-height: 300px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100" src="assets/img/team-1.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                                <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="bg-light p-4">
                                <h4 class="text">Elena Vasquez</h4>
                                <span>Director of Environmental Affairs</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10" style="min-height: 300px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100" src="assets/img/team-2.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                                <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="bg-light p-4">
                                <h4 class="text">Robert Tanaka</h4>
                                <span>Director of Exploration</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10" style="min-height: 300px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100" src="assets/img/team-3.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                                <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="bg-light p-4">
                                <h4 class="text">Amara Osei</h4>
                                <span>Director of Community Relations</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10" style="min-height: 300px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100" src="assets/img/team-4.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-between bg-light">
                                <a class="btn" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn" href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="bg-light p-4">
                                <h4 class="text">Josh Dunn</h4>
                                <span>Painter</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Team End -->

    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <h3 class="display-9 text-uppercase mb-4">Our Workforce</h3>
                <p class="mb-4">
                    Behind our leadership team stands a workforce of over 500 dedicated professionals, including:
                </p>
                {{-- <h3 class="display-9 text-uppercase mb-4">Our Values</h3> --}}
                <div class="row gx-5 py-2">
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Geologists and Geophysicists</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Mining and Civil Engineers</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Environmental Scientists</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Process Specialists</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Safety Officers</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Technical Support Teams</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Administrative Personnel </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 pb-5" style="min-height: 350px;">
                <div class="position-relative bg-dark-radial h-100 ms-5">
                    <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="assets/img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
            <p class="mb-4">
                We invest heavily in ongoing training and professional development, 
                ensuring our team remains at the cutting edge of mining practices and technologies.
            </p>
        </div>
    </div>
    

    <!-- Footer Start -->
    @include('includes.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
@endsection