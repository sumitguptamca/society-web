@extends('layouts.master') 
@section('techsoch') 
@section('title')
{{$metaTags['title'] ?? ''}}
@stop
@section('description', $metaTags['description'] ?? '')
@section('keywords', $metaTags['keywords'] ?? '')
<div class="container-fluid position-relative p-0">
    <div class="container-fluid bg-primary py-5 bg-header_portfolio" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn mb-3">Portfolio</h1>
                <a class="h5 text-white" title="Discover the distinguishing factors that position TechSoch">Discover the distinguishing factors that position TechSoch </a>
                <!-- <i class="fa fa-angle-double-right text-white px-2"></i> -->
                <br>
                <a href="" class="h5 text-white" title="title="Discover the distinguishing factors that position TechSoch"">as a top-tier Global Digital Services and Solutions Provider.</a>
            </div>
        </div>
    </div>
</div>


<!-- Project Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Projects</h5>
                <h1 class="mb-0">Projects Completed for Our Happy Clients</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <!--<li class="btn btn-outline-primary py-2 px-4 active" data-filter="*">-->
                        <!--    <i class="fa fa-star me-2"></i>All-->
                        <!--</li>-->
                        <li class="btn btn-outline-primary py-2 px-4" data-filter=".first">
                            <i class="fa fa-laptop-code me-2"></i>Web development
                        </li>
                        <li class="btn btn-outline-primary py-2 px-4" data-filter=".second">
                            <i class="fa fa-mobile-alt me-2"></i>App development 
                        </li>
                    </ul>
                </div>
            </div>
            
              <!--web devlopment  ------------ -->
            <div class="row g-5 portfolio-container">
                <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first wow slideInUp" data-wow-delay="0.1s">
                    <div class="position-relative portfolio-box">
                        <div class="portfolio-img rounded overflow-hidden">
                            <!--<img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">-->
                            <img class="img-fluid w-100" src="{{ URL::asset('public/assets/img/portfolio-01.png')}}" alt="">
                        </div>
                        <!--<a class="portfolio-title border-bottom border-5 border-primary" href="">-->
                        <!--    <h4>Project Name</h4>-->
                        <!--    <small class="text-body text-uppercase"><i class="fa fa-folder text-primary me-2"></i>Web Design</small>-->
                        <!--</a>-->
                        <div class="portfolio-btn">
                            <a href="img/portfolio-1.jpg" data-lightbox="portfolio"><i class="bi bi-plus display-1 text-white"></i></a>
                        </div>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                
                  <!--app devlopment  ------------ -->
                <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first wow slideInUp" data-wow-delay="0.3s">
                    <div class="position-relative portfolio-box">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid w-100" src="{{ URL::asset('public/assets/img/portfolio-2.png')}}" alt="">
                        </div>
                        <!--<a class="portfolio-title border-bottom border-5 border-primary" href="">-->
                        <!--    <h4>Project Name</h4>-->
                        <!--    <small class="text-body text-uppercase"><i class="fa fa-folder text-primary me-2"></i>Web Development</small>-->
                        <!--</a>-->
                        <div class="portfolio-btn">
                            <a href="img/portfolio-2.jpg" data-lightbox="portfolio"><i class="bi bi-plus display-1 text-white"></i></a>
                        </div>
                    </div>
                </div>
                <!--web devlopment  ------------ -->
                <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first wow slideInUp" data-wow-delay="0.5s">
                    <div class="position-relative portfolio-box">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid w-100" src="{{ URL::asset('public/assets/img/portfolio-3.png')}}" alt="">
                        </div>
                        <!--<a class="portfolio-title border-bottom border-5 border-primary" href="">-->
                        <!--    <h4>Project Name</h4>-->
                        <!--    <small class="text-body text-uppercase"><i class="fa fa-folder text-primary me-2"></i>Web Design</small>-->
                        <!--</a>-->
                        <div class="portfolio-btn">
                            <a href="img/portfolio-3.jpg" data-lightbox="portfolio"><i class="bi bi-plus display-1 text-white"></i></a>
                        </div>
                    </div>
                </div>
                
                  <!--app devlopment  ------------ -->
                <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first wow slideInUp" data-wow-delay="0.1s">
                    <div class="position-relative portfolio-box">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid w-100" src="{{ URL::asset('public/assets/img/port001.png')}}" alt="">
                        </div>
                        <!--<a class="portfolio-title border-bottom border-5 border-primary" href="">-->
                        <!--    <h4>Project Name</h4>-->
                        <!--    <small class="text-body text-uppercase"><i class="fa fa-folder text-primary me-2"></i>Web Development</small>-->
                        <!--</a>-->
                        <div class="portfolio-btn">
                            <a href="img/port001.png" data-lightbox="portfolio"><i class="bi bi-plus display-1 text-white"></i></a>
                        </div>
                    </div>
                </div>
                
                  <!--web devlopment  ------------ -->
                <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first wow slideInUp" data-wow-delay="0.3s">
                    <div class="position-relative portfolio-box">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid w-100" src="{{ URL::asset('public/assets/img/port002.png')}}" alt="">
                        </div>
                        <!--<a class="portfolio-title border-bottom border-5 border-primary" href="">-->
                        <!--    <h4>Project Name</h4>-->
                        <!--    <small class="text-body text-uppercase"><i class="fa fa-folder text-primary me-2"></i>Web Design</small>-->
                        <!--</a>-->
                        <div class="portfolio-btn">
                            <a href="img/port002.png" data-lightbox="portfolio"><i class="bi bi-plus display-1 text-white"></i></a>
                        </div>
                    </div>
                </div>
                
                  <!--app devlopment  ------------ -->
                <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second wow slideInUp" data-wow-delay="0.5s">
                    <div class="position-relative portfolio-box">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid w-100" src="{{ URL::asset('public/assets/img/port003.png')}}" alt="">
                        </div>
                        <!--<a class="portfolio-title border-bottom border-5 border-primary" href="">-->
                        <!--    <h4>Project Name</h4>-->
                        <!--    <small class="text-body text-uppercase"><i class="fa fa-folder text-primary me-2"></i>Web Development</small>-->
                        <!--</a>-->
                        <div class="portfolio-btn">
                            <a href="img/port003.png" data-lightbox="portfolio"><i class="bi bi-plus display-1 text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->









@endsection