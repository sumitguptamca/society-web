@extends('layouts.master') 
@section('techsoch')
@section('title')
{{$metaTags['title'] ?? ''}}
@stop
@section('description', $metaTags['description'] ?? '')
@section('keywords', $metaTags['keywords'] ?? '')
	<div class="container-fluid position-relative p-0">   
        <div class="container-fluid bg-primary py-5 bg-header_industry" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn mb-3">INDUSTRIES</h1>
                    <a  class="h5 text-white" title="Driving Digital Transformation and Innovation"> Driving Digital Transformation and Innovation</a>
                    <!-- <i class="fa fa-angle-double-right text-white px-2"></i>
                    <a href="" class="h5 text-white">Contact</a> -->
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
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Service Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Empowering Business Growth Through TechSoch Software Solution</h5>
                <!-- <h1 class="mb-0"></h1> -->
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                         <img src="public/assets/img/icon/industry_health.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" title="industry_health" />
                        <h4 class="mb-3">Healthcare</h4>
                        <p class="m-0">TechSoch plays a crucial role in elevating patient care, enhancing decision-making for healthcare professionals, and ultimately fostering a more efficient and effective healthcare ecosystem.</p>
                        <a class="btn btn-lg btn-primary rounded" href="#" title="btn">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                         <img src="public/assets/img/icon/industry_manufacturing.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" title="industry_manufacturing" />
                        <h4 class="mb-3">Manufacturing</h4>
                        <p class="m-0">TechSoch optimizes manufacturing workflows by integrating technology for efficiency and precision. Utilizing automation and data analytics, they drive heightened productivity within the manufacturing sector.</p>
                        <a class="btn btn-lg btn-primary rounded" href=""  title="btn">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img src="public/assets/img/icon/industry_education.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" title="industry_education" />
                        <h4 class="mb-3">Education</h4>
                        <p class="m-0">TechSoch revolutionizes the education sector by pioneering advanced learning technologies and interactive platforms. Their personalized software lead the way in transforming modern education.</p>
                        <a class="btn btn-lg btn-primary rounded" href=""  title="btn">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                         <img src="public/assets/img/icon/industry_ecommerece.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" title="industry_ecommerece" />
                        <h4 class="mb-3">E-Commerce</h4>
                        <p class="m-0">TechSoch empowers the e-commerce sector with robust platforms and seamless user experiences. Their efforts enhance e-commerce landscape, benefiting both businesses and consumers.</p>
                        <a class="btn btn-lg btn-primary rounded" href=""  title="btn">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                         <img src="public/assets/img/icon/industry_real-state.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" title="industry_real-state" />
                        <h4 class="mb-3">Real Estate</h4>
                        <p class="m-0">IT companies modernize the real estate sector with advanced technology solutions, optimizing property management and transactions for improved efficiency and customer satisfaction.</p>
                        <a class="btn btn-lg btn-primary rounded" href=""  title="btn">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img src="public/assets/img/icon/industry_fintech.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" title="industry_fintech" />
                        <h4 class="mb-3">Fintech</h4>
                        <p class="m-0">IT companies drive fintech innovation through cutting-edge software and digital solutions, enhancing financial services accessibility, security, and efficiency.</p>
                        <a class="btn btn-lg btn-primary rounded" href=""  title="btn">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                       <img src="public/assets/img/icon/industry_entertainment.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" title="industry_entertainment" />
                        <h4 class="mb-3">Entertainment</h4>
                        <p class="m-0">TechSoch develop software for special effects, animation, and video editing. They also provide cloud computing resources that enable entertainment companies to produce high-quality content at scale.</p>
                        <a class="btn btn-lg btn-primary rounded" href=""  title="btn">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img src="public/assets/img/icon/web_application.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" />
                        <h4 class="mb-3">IT & Consulting</h4>
                        <p class="m-0">Ready to elevate your company's technology? Our IT department is here to help, with services ranging from web and mobile app redesign to infrastructure implementation to business intelligence solutions.</p>
                        <a class="btn btn-lg btn-primary rounded" href=""  title="btn">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Call Us For Quote</h3>
                        <p class="text-white mb-3">Call to ask any question</p>
                        <h3 class="text-white mb-0">+91-9118991115</h3>
                        <h3 class="text-white mb-0">0522-7166547</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Work Process Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Work Process</h5>
                <h2 class="mb-0">Step By Step Simple & Clean Working Process</h2>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-md-6 process-item wow slideInUp" data-wow-delay="0.2s">
                    <div class="position-relative d-flex flex-column align-items-center text-center">
                        <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-users fa-2x text-white"></i>
                        </div>
                        <h3>Meeting </h3>
                        <p class="mb-0">We can schedule a requirements meeting</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 process-item wow slideInUp" data-wow-delay="0.4s">
                    <div class="position-relative d-flex flex-column align-items-center text-center">
                        <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-sitemap fa-2x text-white"></i>
                        </div>
                        <h3>Solution</h3>
                        <p class="mb-0">We will provide results-oriented solutions</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 process-item wow slideInUp" data-wow-delay="0.6s">
                    <div class="position-relative d-flex flex-column align-items-center text-center">
                        <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-code fa-2x text-white"></i>
                        </div>
                        <h3>Execution</h3>
                        <p class="mb-0">We will initiate the execution plan</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 process-item wow slideInUp" data-wow-delay="0.8s">
                    <div class="position-relative d-flex flex-column align-items-center text-center">
                        <div class="process-icon bg-primary rounded d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-check fa-2x text-white"></i>
                        </div>
                        <h3>Finalization</h3>
                        <p class="mb-0">The customer will receive the fully completed product</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection