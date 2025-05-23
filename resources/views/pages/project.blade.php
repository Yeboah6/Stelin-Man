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
        <h1 class="display-3 text-uppercase text-white mb-3">Project</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="/">Home</a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0">Project</h6>
        </div>
    </div>
    <!-- Page Header Start -->
    

    <!-- Portfolio Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">Featured Projects</h1>
        </div>
        {{-- <div class="row gx-5">
            <div class="col-12 text-center">
                <div class="d-inline-block bg-dark-radial text-center pt-4 px-5 mb-5">
                    <ul class="list-inline mb-0" id="portfolio-flters">
                        <li class="btn btn-outline-primary bg-white p-2 active mx-2 mb-4" data-filter="*">
                            <img src="assets/img/portfolio-1.jpg" style="width: 150px; height: 100px;">
                            <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center" style="background: rgba(4, 15, 40, .3);">
                                <h6 class="text-white text-uppercase m-0">All</h6>
                            </div>
                        </li>
                        <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter=".first">
                            <img src="assets/img/portfolio-2.jpg" style="width: 150px; height: 100px;">
                            <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center" style="background: rgba(4, 15, 40, .3);">
                                <h6 class="text-white text-uppercase m-0">Construction</h6>
                            </div>
                        </li>
                        <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter=".second">
                            <img src="assets/img/portfolio-3.jpg" style="width: 150px; height: 100px;">
                            <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center" style="background: rgba(4, 15, 40, .3);">
                                <h6 class="text-white text-uppercase m-0">Renovation</h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <div class="row g-5 portfolio-container image">
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="assets/img/portfolio-4.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="text">Sierra Mountains Copper Project</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>Western United States</span>
                    </a>
                    <a class="portfolio-btn" href="assets/img/portfolio-4.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="assets/img/ship.webp" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="text">Oceanic Basin Mineral Exploration</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>Pacific Rim</span>
                    </a>
                    <a class="portfolio-btn" href="assets/img/ship.webp" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="assets/img/mining3.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="text">Northern Territory Gold Mine Expansion</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>Australia</span>
                    </a>
                    <a class="portfolio-btn" href="assets/img/mining3.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="assets/img/coal-mine.webp" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="text">Westridge Coal Project</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>Eastern Canada</span>
                    </a>
                    <a class="portfolio-btn" href="assets/img/coal-mine.webp" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="assets/img/phosphate-mining.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class="text">Sahara Phosphate Development</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>North Africa</span>
                    </a>
                    <a class="portfolio-btn" href="assets/img/phosphate-mining.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div>
            {{-- <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="assets/img/portfolio-6.jpg" alt="">
                    <a class="portfolio-title shadow-sm" href="">
                        <p class=" text-uppercase">Project Name</p>
                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>Location, City, Country</span>
                    </a>
                    <a class="portfolio-btn" href="assets/img/portfolio-6.jpg" data-lightbox="portfolio">
                        <i class="bi bi-plus text-white"></i>
                    </a>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- Portfolio End -->
    

    <!-- Footer Start -->
 @include('includes.footer')
    <!-- Footer End -->


@endsection