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
                    <h1 class="display-4 text-white animated zoomIn mb-3">UI/UX Design Company</h1>
                    <a  class="h5 text-white">The team collaborates to craft engaging digital experiences</a>
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
                    <img class="img-fluid w-100 rounded mb-5" src="public/assets/img/services/techsoch_ui_ux.png" alt="">
                    <h1 class="mb-4">UI/UX Design</h1>
                    <p>At TechSoch Software Solution, we have a strong passion for crafting exceptional websites and mobile apps, prioritizing enhanced user experiences. We firmly believe that an effective user interface goes beyond aesthetics, encompassing functionality, usability, and accessibility. Our collaborative team of designers and developers is dedicated to creating seamless digital experiences that captivate and bring joy to users.</p>

                    <p> Our services in user experience design strive to accurately represent your business through impactful, branded digital interfaces tailored to the user. At TechSoch, we provide user interfaces that leave a lasting impression and effectively engage with the audience.</p>

                    <p>We facilitate the achievement of your revenue and business objectives, serving as either a short-term strategic collaborator or a long-term advisory entity seamlessly integrated into your team, contributing to the continuous evolution of your digital solutions.</p>

                    <p>We specialize in crafting impeccable designs to create innovative websites that captivate users on both desktop and mobile devices with their cutting-edge appeal.</p>
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
                <h5 class="fw-bold text-primary text-uppercase">our end-to-end UI/UX design services</h5>
                <h1 class="mb-0">Our UI/UX design services ensure surpassing all user needs</h1>
            </div>
            <div class="row g-5" style="text-align:justify;">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-5">
                             <img src="public/assets/img/icon/ui_research.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" />
                            <div class="ps-4">
                                <h4 class="mb-3">Research</h4>
                                <p>Our user experience (UX) design services aid in identifying opportunities within unaddressed user needs, building a robust understanding of market trends, and optimizing designs with low conversion rates with user and market research and UI/UX audit</p>
                                <!-- <a class="text-uppercase" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-5">
                            <img src="public/assets/img/icon/ui_wireframe.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" />
                            <div class="ps-4">
                                <h4 class="mb-3">Wireframing</h4>
                                <p>We utilize conceptual wireframing to establish a strong visual foundation for your product. Every wireframe undergoes rigorous testing by our experts and validation by your team to ensure the project progresses on the correct trajectory.</p>
                                <!-- <a class="text-uppercase" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-5">
                            <img src="public/assets/img/icon/ui_prototype.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" />
                            <div class="ps-4">
                                <h4 class="mb-3">Prototyping</h4>
                                <p>Our designers develop interactive prototypes that display your design idea to stakeholders. These prototypes allow for quick changes before the final product, saving you time and effort in the development process with Low-/High-fidelity prototyping.</p>
                                <!-- <a class="text-uppercase" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                   <div class="col-lg-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-5">
                             <img src="public/assets/img/icon/ui_testing.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" />
                            <div class="ps-4">
                                <h4 class="mb-3"> Testing</h4>
                                <p>Our developers remove the uncertainty from your design choices and ensure that your UX/UI resonates with the end user. We conduct a thorough analysis of an application's interface and logic, addressing any issues and refining the design for a seamless experience.
                                </p>
                                <!-- <a class="text-uppercase" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s" >
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-5">
                            <img src="public/assets/img/icon/ui_frontend.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" />
                            <div class="ps-4">
                                <h4 class="mb-3">Frontend development </h4>
                                <p>We meticulously design our interfaces, prioritizing attention to detail to ensure users effortlessly find what they need like Web front-end development, Front-end development for mobile and Cross-platform front-end development.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.3s" >
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-5">
                             <img src="public/assets/img/icon/ui_modernization.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" />
                            <div class="ps-4">
                                <h4 class="mb-3">Modernization services </h4>
                                <p>Our UI services leverage the most current trends and technologies, offering elevated and intuitive experiences enhanced with cutting-edge features such as tech modernization consulting, application redesign, and legacy system modernization.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">User-centered design across platforms</h5>
                <h1 class="mb-0">Enhance business reach with our visually appealing, device-agnostic designs</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img src="public/assets/img/icon/ui_mobile.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" />
                        <h4 class="mb-2">Mobile design</h4>
                        <p class="m-0">We provide mobile UI/UX design that translate your visionary ideas into a dynamic, feature-rich interface.Our designs guarantee effortless product uptake, captivate your audience, and drastically increase conversion rates. 

                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img src="public/assets/img/icon/web_application.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" />
                        <h4 class="mb-2">Web design</h4>
                        <p class="m-0">Count on our tailor-made web UI design solutions to craft responsive and SEO-friendly web designs that minimize barriers between you and your customers.We make sure our designs help your business growth.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <img src="public/assets/img/icon/responsive-design.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" />
                        <h4 class="mb-2">Cross-platform design</h4>
                        <p class="m-0">We conduct thorough validation of your designs on real devices to guarantee they function as intended, achieving seamless cross-platform integration and reaching your customers no matter their location.
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
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
                <h1 class="mb-0">Expertise with a comprehensive tech stack and abundant experience.</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-2  wow zoomIn" data-wow-delay="0.3s">
                    <div class=" rounded d-flex align-items-center justify-content-center text-center">
                        <img class="img-fluid rounded" src="public/assets/img/tech/ui_xd.png" style="width: 150px; height: 100px;" >
                       
                    </div>
                </div>
                 <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">
                    <div class=" rounded d-flex align-items-center justify-content-center text-center">
                        <img class="img-fluid rounded" src="public/assets/img/tech/ui_adobe.png" style="width: 100px; height: 100px;" >
                       
                    </div>
                </div>
                 <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">
                    <div class=" rounded d-flex align-items-center justify-content-center text-center">
                        <img class="img-fluid rounded" src="public/assets/img/tech/ui_figma.png" style="width: 100px; height: 100px;" >
                       
                    </div>
                </div>
                 <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">
                    <div class=" rounded d-flex align-items-center justify-content-center text-center">
                        <img class="img-fluid rounded" src="public/assets/img/tech/ui_sketch.png" style="width: 100px; height: 100px;" >
                       
                    </div>
                </div>
                 <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">
                    <div class=" rounded d-flex align-items-center justify-content-center text-center">
                        <img class="img-fluid rounded" src="public/assets/img/tech/ui_bootstrap.png" style="width: 100px; height: 100px;" >
                       
                    </div>
                </div>
                 <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">
                    <div class=" rounded d-flex align-items-center justify-content-center text-center">
                        <img class="img-fluid rounded" src="public/assets/img/tech/ui_html.png" style="width: 100px; height: 100px;" >
                       
                    </div>
                </div>
                <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">
                    <div class=" rounded d-flex align-items-center justify-content-center text-center">
                        <img class="img-fluid rounded" src="public/assets/img/tech/ui_css.png" style="width: 150px; height: 100px;" >
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include('Frontend.quote') 

@endsection