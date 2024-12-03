@extends('layouts.master') 
@section('techsoch')
@section('title')
{{$metaTags['title'] ?? ''}}
@stop
@section('description', $metaTags['description'] ?? '')
@section('keywords', $metaTags['keywords'] ?? '')
<div class="container-fluid position-relative p-0">   
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn mb-3">Mobile App Development</h1>
                    <a  class="h5 text-white">Transition from platforms and devices to focus on driving tangible business outcomes</a>
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


    <!-- Service Detail Start -->
    <div class="container-fluid py-1 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-1">
            <div class="row g-5">
                <!-- Detail Start -->
                <div class="col-lg-8" style="text-align:justify;">
                    <img class="img-fluid w-100 rounded mb-5" src="public/assets/img/services/techsoch_mobile.jpg" alt="techsoch_mobile" title="techsoch_mobile">
                    <h2 class="mb-4">Outsource Mobile App Development</h2>
                    <p>TechSoch excels in delivering exceptional mobile experiences through native iOS and Android apps. Moreover, our proficiency in cross-platform solutions strikes a fine balance, optimizing development efficiency while ensuring a performance and user experience akin to native applications.</p>

                    <p> At TechSoch, we pioneer comprehensive mobile solutions for Android and iOS, empowering businesses to embrace digital transformation. We specialize in designing full-scale mobile apps that establish a robust mobile presence for their brand.</p>

                    <p>We assist our clients in harnessing the benefits of rapid technological advancements without burdening their operations. By crafting, integrating, and optimizing features within their mobile applications and enterprise architectures, we guarantee tangible and impactful results.</p>

                    <p>We have expertise in crafting compelling mobile apps that enable businesses to engage with their desired audience and enhance their conversion rates. Our app development spans across multiple platforms, including iOS, Android offering adaptable solutions for your business requirements.</p>
                </div>
                <!-- Detail End -->
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Category Start -->
                    @include('Frontend.our_services')
                    
                    <!-- Category End -->
    
                    <!-- Contact Info Start -->
                    <div class="wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title-1 section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Contact Information</h3>
                        </div>
                        <div class="bg-primary p-4">
                            <div class="d-flex align-items-center mb-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="bg-white d-flex align-items-center justify-content-center rounded" style="width: 45px; height: 45px;">
                                    <i class="fa fa-phone-alt text-primary"></i>
                                </div>
                                <div class="ps-3">
                                    <p class="text-white mb-1">+91-9118991115</p>
                                    <!-- <p class="text-white mb-0">+012 345 6789</p> -->
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="bg-white d-flex align-items-center justify-content-center rounded" style="width: 45px; height: 45px;">
                                     <i class="fa fa-envelope text-primary"></i>
                                </div>
                                <div class="ps-3">
                                    <p class="text-white mb-1">info@techsochss.com</p>
                                    <!-- <p class="text-white mb-0">support@example.com</p> -->
                                </div>
                            </div>
                            <div class="d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s">
                                <div class="bg-white d-flex align-items-center justify-content-center rounded" style="width: 45px; height: 45px;">
                                  <i class="fa  fa-map-marker-alt text-primary me-2"></i>
                                </div>
                                <div class="ps-3">
                                    <p class="text-white mb-1">Omaxe Metro City, Lucknow</p>
                                    <p class="text-white mb-0">India</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Info End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Service Detail End -->

      <!-- Service Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Mobile Solutions Spectrum</h5>
                <h2 class="mb-0">Mobile Solutions We Build</h2>
            </div>
            <div class="row g-5" style="text-align:justify;">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-5">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-apple fa-2x text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h4 class="mb-3">Native iOS Applications</h4>
                                <p>We leverage our expertise and industry best practices to deliver a diverse range of customized mobile applications for Apple devices, encompassing wearables, smart TVs, and beyond.</p>
                                <!-- <a class="text-uppercase" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-5">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-android fa-2x text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h4 class="mb-3">Native Android Applications</h4>
                                <p>Our dedicated team of Android app developers crafts high-performance applications that seamlessly operate across a diverse range of Android devices, guaranteeing an exceptional user experience for all.</p>
                                <!-- <a class="text-uppercase" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-5">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-desktop fa-2x text-white"></i>
                                
                            </div>
                            <div class="ps-4">
                                <h4 class="mb-3">Cross-Platform Development</h4>
                                <p>Our committed team leverages technologies like React Native and MAUI-Xamarin to develop mobile applications with rich features across diverse industries, including healthcare, education, hospitality, and beyond.</p>
                                <!-- <a class="text-uppercase" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                   <div class="col-lg-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-5">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-mobile fa-2x text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h4 class="mb-3">Hybrid Mobile Applications</h4>
                                <p>We specialize in constructing rapid and scalable hybrid mobile applications, enabling businesses to streamline mobile app development, testing, and support processes, resulting in time and cost savings.
                                </p>
                                <!-- <a class="text-uppercase" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
               <!--  <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s" >
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-5">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-search text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h4 class="mb-3">Maintenance & Support</h4>
                                <p>We offer comprehensive maintenance and support solutions for custom app development, ensuring uninterrupted app functionality and sustained business productivity.</p>
                                
                            </div>
                        </div>
                    </div>
                </div> -->
             
            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Advantages of Tailored Mobile App Development Solutions</h5>
                <!-- <h1 class="mb-0">Full-Stack Web Development Services Under One Roof</h1> -->
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                       <!--  <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div> -->
                        <h4 class="mb-3">Complete Product Transformation</h4>
                        <p class="m-0">Our team of mobile app developers brings extensive expertise in app development and product engineering, crafting innovative and user-centric applications. 

                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="" title="Complete Product Transformation">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <!-- <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div> -->
                        <h4 class="mb-3">Faster Iterations</h4>
                        <p class="m-0">Our professionals create customized systems and applications to streamline your organization's workflow, optimize resource management, and improve data processes.</p>
                        <a class="btn btn-lg btn-primary rounded" href="" title="Faster Iterations">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                      <!--   <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div> -->
                        <h4 class="mb-3">Requirement-Tailored Approach</h4>
                        <p class="m-0">At TechSoch, we possess the necessary expertise to craft tailor-made app developments that precisely align with unique business requirements, employing a reimagined approach.
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="" title="Requirement-Tailored Approach">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                       <!--  <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div> -->
                        <h4 class="mb-3">Interactive and Intuitive UI/UX</h4>
                        <p class="m-0">Our skilled UI/UX designers excel in crafting compelling mobile app interfaces and experiences that immediately captivate your target audience, offering them effortless navigation capabilities.</p>
                        <a class="btn btn-lg btn-primary rounded" href="" title="Interactive and Intuitive UI/UX">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <!-- <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div> -->
                        <h4 class="mb-3">Comprehensive Testing and QA</h4>
                        <p class="m-0">TechSoch ensures cost-effective app development with thorough manual and automated testing to enhance performance and functionality, addressing blockers and bugs for optimal accuracy.</p>
                        <a class="btn btn-lg btn-primary rounded" href="" title="Comprehensive Testing and QA" >
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <!-- <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div> -->
                        <h4 class="mb-3">Secure & Scalable Infrastructure</h4>
                        <p class="m-0">Renowned for scalable, secure app development, we prioritize robust architecture. Our solutions safeguard your organization's data with a unique digital approach.</p>
                        <a class="btn btn-lg btn-primary rounded" href="" title="Secure & Scalable Infrastructure">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Work Process Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Tech Stack & Extensive Experience </h5>
                <h2 class="mb-0">Expertise with a comprehensive tech stack and abundant experience.</h2>
            </div>
            <div class="row g-5">
                <div class="col-lg-2  wow zoomIn" data-wow-delay="0.3s">
                    <div class=" rounded d-flex align-items-center justify-content-center text-center">
                        <img class="img-fluid rounded" src="public/assets/img/tech/m8.png" style="width: 100px; height: 100px;" alt="Tech Stack & Extensive Experience" title="Tech Stack & Extensive Experience" >
                       
                    </div>
                </div>
                 <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">
                    <div class=" rounded d-flex align-items-center justify-content-center text-center">
                        <img class="img-fluid rounded" src="public/assets/img/tech/m1.png" style="width: 150px; height: 120px;" alt="icon" title="icon" >
                       
                    </div>
                </div>
                 <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">
                    <div class=" rounded d-flex align-items-center justify-content-center text-center">
                        <img class="img-fluid rounded" src="public/assets/img/tech/m3.png" style="width: 100px; height: 100px;" alt="icon" title="icon" >
                       
                    </div>
                </div>
                 <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">
                    <div class=" rounded d-flex align-items-center justify-content-center text-center">
                        <img class="img-fluid rounded" src="public/assets/img/tech/m9.jpg" style="width: 100px; height: 100px;" alt="icon" title="icon">
                       
                    </div>
                </div>
                 <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">
                    <div class=" rounded d-flex align-items-center justify-content-center text-center">
                        <img class="img-fluid rounded" src="public/assets/img/tech/m5.png" style="width: 100px; height: 100px;" alt="icon" title="icon" >
                       
                    </div>
                </div>
                 <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">
                    <div class=" rounded d-flex align-items-center justify-content-center text-center">
                        <img class="img-fluid rounded" src="public/assets/img/tech/m6.png" style="width: 100px; height: 100px;" alt="icon" title="icon" >
                       
                    </div>
                </div>
                <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">
                    <div class=" rounded d-flex align-items-center justify-content-center text-center">
                        <img class="img-fluid rounded" src="public/assets/img/tech/m7.png" style="width: 100px; height: 100px;" alt="icon" title="icon" >
                       
                    </div>
                </div>
                <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">
                    <div class=" rounded d-flex align-items-center justify-content-center text-center">
                        <img class="img-fluid rounded" src="public/assets/img/tech/7.png" style="width: 100px; height: 100px;"  alt="icon" title="icon">
                       
                    </div>
                </div>
              <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">
                    <div class=" rounded d-flex align-items-center justify-content-center text-center">
                        <img class="img-fluid rounded" src="public/assets/img/tech/m4.png" style="width: 100px; height: 100px;" alt="icon" title="icon" >
                       
                    </div>
                </div>
              
                
                
            </div>
        </div>
    </div>
    
@include('Frontend.quote') 

@endsection