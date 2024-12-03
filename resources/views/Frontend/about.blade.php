@extends('layouts.master') 
@section('techsoch') 
@section('title')
{{$metaTags['title'] ?? ''}}
@stop
@section('description', $metaTags['description'] ?? '')
@section('keywords', $metaTags['keywords'] ?? '')
<div class="container-fluid position-relative p-0">
    <div class="container-fluid bg-primary py-5 bg-header_about" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn mb-3">About TechSoch</h1>
                <a class="h5 text-white" title="Discover the distinguishing factors that position TechSoch">Discover the distinguishing factors that position TechSoch </a>
                <!-- <i class="fa fa-angle-double-right text-white px-2"></i> -->
                <br>
                <a href="" class="h5 text-white" title="title="Discover the distinguishing factors that position TechSoch"">as a top-tier Global Digital Services and Solutions Provider.</a>
            </div>
        </div>
    </div>
</div>

<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->
<!-- About Start -->
<div class="container-fluid pt-3 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-3">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title-1 position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Who We Are</h5>
                    
                    
                    <h2 class="mb-0">We optimize your BUSINESS through a range of IT services.</h2>
                </div>
                <p class="mb-4" style="text-align: justify;">Established in 2021, TechSoch is a prominent IT consulting company renowned for its cutting-edge and resilient digital solutions. Our team, comprising over 15+ full-stack developers, designers, and innovators, has a proven track record of delivering diverse IT projects successfully. Utilizing the latest technologies, we transform your concepts into tangible solutions and support businesses through the exceptional skills of our highly qualified developers</p>
                <p class="mb-4" style="text-align: justify;">Additionally, we offer outsourcing services, providing dedicated resources to companies of all sizes worldwide on-demand. We follow an agile software development methodology, allowing flexibility to modify tasks during the development process. Our goal is to deliver high-quality, timely, and cost-effective services.</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3">
                            <i class="fa fa-check text-primary me-3"></i>Award Winning
                        </h5>
                        <h5 class="mb-3">
                            <i class="fa fa-check text-primary me-3"></i>Professional Staff
                        </h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3">
                            <i class="fa fa-check text-primary me-3"></i>24/7 Support
                        </h5>
                        <h5 class="mb-3">
                            <i class="fa fa-check text-primary me-3"></i>Fair Prices
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="public/assets/img/techsoch_about.png" style="object-fit: cover;" alt="techsoch_about.png">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<!-- Features Start -->
<div class="container-fluid py-3">
    <div class="container py-5">
        <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
            <!-- <h1 class="mb-0">10 Years of Our Journey to Help Your Business</h1> -->
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded border-top border-5 border-primary d-flex flex-column align-items-center text-center p-5">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                        <i class="fa fa-award fa-2x text-white"></i>
                    </div>
                    <h4>Cost Saving</h4>
                    <p class="mb-0">We equip clients with the 'Team + Tools + Processes' to minimize their internal IT support costs while maintaining top-notch service</p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.4s">
                <div class="bg-light rounded border-top border-5 border-primary d-flex flex-column align-items-center text-center p-5">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                        <i class="fa fa-users fa-2x text-white"></i>
                    </div>
                    <h4>Enhanced Accessibility</h4>
                    <p class="mb-0">Our approach grants clients access to exceptional skills and cutting-edge technologies supporting IT Service Management</p>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.8s">
                <div class="bg-light rounded border-top border-5 border-primary d-flex flex-column align-items-center text-center p-5">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                        <i class="fa fa-phone-alt fa-2x text-white"></i>
                    </div>
                    <h4>Consistency</h4>
                    <p class="mb-0">Through 24×7 proactive monitoring and transparent fee structures, we ensure a dependable and predictable IT service management experience.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->
<!-- Story Start -->
<div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">How We Work</h5>
            <h2 class="mb-0">Structured, Simplified, and Streamlined Working Process</h2>
        </div>
        <div class="container story position-relative">
            <div class="row mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-12 text-md-center">
                    <div class="d-inline-block bg-primary text-white rounded py-2 px-4" style="width:150px;height: 50px;font-size: 22px;">Analysis</div>
                </div>
            </div>
            <div class="row gx-5 story-right position-relative mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-md-6 text-md-end">
                    <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center " style="float: right;width: 100px;height: 100px;">
                        <i class="bi bi-people fa-2x text-white"></i>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="story-text position-relative d-inline-block bg-light p-4 ms-3 ms-md-0">
                        <h4>Meet</h4>
                        <p class="m-0">Lorem ipsum dolor sit amet elit ornare velit non</p>
                    </div>
                </div>
            </div>
            <div class="row gx-5 story-left position-relative mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-md-6 d-block d-md-none">
                    <!-- <h6 class="fw-bold mb-3 ms-3 ms-md-0">01 Jan, 2021</h6> -->
                    <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center" style="float: left;width: 100px;height: 100px;">
                        <i class="bi bi-pencil-square  fa-2x text-white"></i>
                    </div>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="story-text position-relative d-inline-block bg-light p-4 ms-3 ms-md-0">
                        <h4>Plan</h4>
                        <p class="m-0">Lorem ipsum dolor sit amet elit ornare velit non</p>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <!-- <h6 class="fw-bold mb-3 ms-3 ms-md-0">01 Jan, 2021</h6> -->
                    <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center" style="float: left;width: 100px;height: 100px;">
                        <i class="bi bi-pencil-square  fa-2x text-white"></i>
                    </div>
                </div>
            </div>
            <!--  <div class="row mb-5 wow fadeInUp" data-wow-delay="0.1s"><div class="col-12 text-md-center"><div class="d-inline-block bg-primary text-white rounded py-2 px-4">2020</div></div></div> -->
            <div class="row gx-5 story-right position-relative mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-md-6 text-md-end">
                    <!-- <h6 class="fw-bold mb-3 ms-3 ms-md-0">01 Jun, 2020</h6> -->
                    <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center" style="float: right;width: 100px;height: 100px;">
                        <i class="bi bi-palette fa-2x text-white"></i>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="story-text position-relative d-inline-block bg-light p-4 ms-3 ms-md-0">
                        <h4>Design</h4>
                        <p class="m-0">Lorem ipsum dolor sit amet elit ornare velit non</p>
                    </div>
                </div>
            </div>
            <div class="row gx-5 story-left position-relative mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-md-6 d-block d-md-none">
                    <!-- <h6 class="fw-bold mb-3 ms-3 ms-md-0">01 Jan, 2020</h6> -->
                    <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center" style="float: left;width: 100px;height: 100px;">
                        <i class="bi bi-code-square fa-2x text-white"></i>
                    </div>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="story-text position-relative d-inline-block bg-light p-4 ms-3 ms-md-0">
                        <h4>Develop</h4>
                        <p class="m-0">Lorem ipsum dolor sit amet elit ornare velit non</p>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <!-- <h6 class="fw-bold mb-3 ms-3 ms-md-0">01 Jan, 2020</h6> -->
                    <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center" style="float: left;width: 100px;height: 100px;">
                        <i class="bi bi-code-square fa-2x text-white"></i>
                    </div>
                </div>
            </div>
            <div class="row gx-5 story-right position-relative mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-md-6 text-md-end">
                    <!-- <h6 class="fw-bold mb-3 ms-3 ms-md-0">01 Jun, 2019</h6> -->
                    <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center" style="float: right;width: 100px;height: 100px;">
                        <i class=" bi bi-ui-checks-grid fa-2x text-white"></i>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="story-text position-relative d-inline-block bg-light p-4 ms-3 ms-md-0">
                        <h4>Testing</h4>
                        <p class="m-0">Lorem ipsum dolor sit amet elit ornare velit non</p>
                    </div>
                </div>
            </div>
            <div class="row gx-5 story-left position-relative mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-md-6 d-block d-md-none">
                    <!-- <h6 class="fw-bold mb-3 ms-3 ms-md-0">01 Jan, 2019</h6> -->
                    <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center" style="float: left;width: 100px;height: 100px;">
                        <i class="bi bi-check-circle fa-2x text-white"></i>
                    </div>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="story-text position-relative d-inline-block bg-light p-4 ms-3 ms-md-0">
                        <h4>Deploy</h4>
                        <p class="m-0">Lorem ipsum dolor sit amet elit ornare velit non</p>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <!-- <h6 class="fw-bold mb-3 ms-3 ms-md-0">01 Jan, 2019</h6> -->
                    <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center" style="float: left;width: 100px;height: 100px;">
                        <i class="bi bi-check-circle fa-2x text-white"></i>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-12 text-md-center">
                    <div class="d-inline-block bg-primary text-white rounded py-2 px-4" style="width:150px;height: 50px;font-size: 22px;">Launched</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Story End -->
<!-- Facts Start -->
<div class="container-fluid facts pb-3 pt-lg-0 mt-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-primary d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-users text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Satisfied Clients</h5>
                        <h2 class="text-white mb-0" data-toggle="counter-up">30</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-dark d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-check text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Positive Feedback</h5>
                        <h2 class="text-white mb-0" data-toggle="counter-up">100</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-primary d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-award text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Solutions Delivered</h5>
                        <h2 class="text-white mb-0" data-toggle="counter-up">80</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('Frontend.quote') 

@endsection