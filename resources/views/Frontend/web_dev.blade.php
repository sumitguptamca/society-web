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

                    <h1 class="display-4 text-white animated zoomIn mb-3">Web Development</h1>

                    <a  class="h5 text-white">Crafting Tailored Web Solutions for Strengthening Your Digital Presence</a>

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



    <!-- Service Detail Start -->

    <div class="container-fluid py-1 wow fadeInUp" data-wow-delay="0.1s">

        <div class="container py-1">

            <div class="row g-5">

                <!-- Detail Start -->

                <div class="col-lg-8" style="text-align:justify;">

                    <img class="img-fluid w-100 rounded mb-5" src="public/assets/img/services/techsoch_web.png" alt="techsoch_web" title="techsoch_web">

                    <h2 class="mb-4">Custom Web App Development</h2>

                    <p>TechSoch creates exceptional solutions to elevate our clients' web presence and drive sustained business growth. Our customized web applications, designed to cater to your unique requirements, will propel your business to new heights, ensuring top-notch security, round-the-clock accessibility, and heightened productivity.</p>



                    <p> Our full-stack approach enables clients to entrust the management of their web applications entirely to our team. Our engineers excel in utilizing cutting-edge front-end technologies and staying updated with the latest trends. We leverage a variety of web frameworks and adhere to rigorous coding standards to ensure seamless integration and maintain high code quality.</p>



                    <p>Being a professional web development company, we collaborate with startups and large-scale enterprises, elevating their digital presence through robust websites and web applications. Apart from traditional websites, we specialize in creating highly functional web solutions like Progressive Web Apps, user-centric web applications, and single-page websites.</p>

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

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">

        <div class="container py-5">

            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">

                <h5 class="fw-bold text-primary text-uppercase">Our Web Development Services</h5>

                <h2 class="mb-0">Full-Stack Web Development Services Under One Roof</h2>

            </div>

            <div class="row g-5">

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">

                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">

                       

                        <img src="public/assets/img/icon/large_scale.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" title="Web Application" />

                        <h4 class="mb-3">Web Application Development</h4>

                        <p class="m-0">TechSoch assists clients in building scalable web solutions from the ground up or modernizing legacy systems to adapt to various device types.



                        </p>

                        <a class="btn btn-lg btn-primary rounded" href="">

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">

                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">

                        <img src="public/assets/img/icon/web_application.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" title="Web Application" />

                        <h4 class="mb-3">Large-Scale Distributed Systems</h4>

                        <p class="m-0">Our experts design systems and apps tailored to streamline your organization's workflow, optimize resource management, and enhance data processes.</p>

                        <a class="btn btn-lg btn-primary rounded" href="">

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">

                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">

                       <img src="public/assets/img/icon/web_ecommerce.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" title="Web Application" />

                        <h4 class="mb-3">Custom E-commerce Solutions</h4>

                        <p class="m-0">we specialize in developing highly functional ecommerce stores that not only elevate the shopping experience but also drive substantial returns on investment for merchants.</p>

                        <a class="btn btn-lg btn-primary rounded" href="">

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">

                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">

                       <img src="public/assets/img/icon/responsive-design.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" title="Web Application" />

                        <h4 class="mb-3">Responsive Web Designing</h4>

                        <p class="m-0">Every website and web application we create adheres to a responsive architecture, ensuring a seamless user experience across all devices.</p>

                        <a class="btn btn-lg btn-primary rounded" href="">

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">

                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">

                        <img src="public/assets/img/icon/web-development.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;"  title="Web Application"/>

                        <h4 class="mb-3">Backend Development</h4>

                        <p class="m-0">Our team of expert website developers harnesses the power of top-tier frameworks and libraries to build high-performance backend solutions</p>

                        <a class="btn btn-lg btn-primary rounded" href="">

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">

                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">

                         <img src="public/assets/img/icon/web_api.png" alt="Web Application" style="width:50px;height: 50px;margin-bottom: 10px;" title="Web Application" />

                        <h4 class="mb-3">API Integration</h4>

                        <p class="m-0">This approach not only improves the overall functionality of your product but also speeds up the time-to-market, leading to quicker deployments.</p>

                        <a class="btn btn-lg btn-primary rounded" href="">

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Service End -->

    <!-- Testimonial Start -->

    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">

        <div class="container py-3">

            <div class="section-title-1 text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">

                <h5 class="fw-bold text-primary text-uppercase">Web development Process</h5>

                <h2 class="mb-0">Our engagement model prioritizes transparency and flexibility.</h2>

            </div>

            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">

                <div class="testimonial-item bg-light my-4">

                    <div class="d-flex align-items-center border-bottom pt-5 pb-5 px-4" >

                        

                        <img class="lign-items-center justify-content-center" src="public/assets/img/icon/Integrated.png" alt="Web Application" style="width:50px;height: 50px;" title="Web Application"/>

                        

                        <div class="ps-4">

                           

                            <small class="text-uppercase"><b>Fully Integrated Web Solutions</b></small>

                        </div>

                    </div>

                   

                </div>

                <div class="testimonial-item bg-light my-4">

                    <div class="d-flex align-items-center border-bottom pt-5 pb-5 px-4">

                        <img class="lign-items-center justify-content-center" src="public/assets/img/icon/skill_developer.png" alt="Web Application" style="width:50px;height: 50px;" title="Web Application" />



                        <div class="ps-4">

                           

                            <small class="text-uppercase"><b>Highly Skilled Web Developers</b></small>

                        </div>

                    </div>

                    

                </div>

                <div class="testimonial-item bg-light my-4">

                    <div class="d-flex align-items-center border-bottom pt-5 pb-5 px-4">

                       <img class="lign-items-center justify-content-center" src="public/assets/img/icon/web_technology.png" alt="Web Application" style="width:50px;height: 50px;" title="Web Application" />

                        <div class="ps-4">

                            

                             <small class="text-uppercase"><b> Advanced Technology</b></small>

                        </div>

                    </div>

                    

                </div>

              

                <div class="testimonial-item bg-light my-4">

                    <div class="d-flex align-items-center border-bottom pt-5 pb-5 px-4">

                      <img class="lign-items-center justify-content-center" src="public/assets/img/icon/web_solution.png" alt="Web Application" style="width:50px;height: 50px;" title="Web Application" />

                        <div class="ps-4">

                           

                            <small class="text-uppercase"><b>Fully Encrypted Web Solutions </b></small>

                        </div>

                    </div>

                    

                </div>

                <div class="testimonial-item bg-light my-4">

                    <div class="d-flex align-items-center border-bottom pt-5 pb-5 px-4">

                        <img class="lign-items-center justify-content-center" src="public/assets/img/icon/web_clock.png" alt="Web Application" style="width:50px;height: 50px;" title="Web Application" />

                        <div class="ps-4">

                            <!-- <h4 class="text-primary mb-1">Fully-Encrypted Web Solutions for Better Security</h4> -->

                            <small class="text-uppercase"><b>Round-the-clock Support </b></small>

                        </div>

                    </div>

                    

                </div>

                <div class="testimonial-item bg-light my-4">

                    <div class="d-flex align-items-center border-bottom pt-5 pb-5 px-4">

                        <img class="lign-items-center justify-content-center" src="public/assets/img/icon/web_custom.png" alt="Web Application" style="width:50px;height: 50px;"  title="Web Application"/>

                        <div class="ps-4">

                            <!-- <h4 class="text-primary mb-1">Fully-Encrypted Web Solutions for Better Security</h4> -->

                            <small class="text-uppercase"><b>Custom Web Development</b></small>

                        </div>

                    </div>

                    

                </div>

            </div>

        </div>

    </div>

    <!-- Testimonial End -->



    <!-- Work Process Start -->

    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">

        <div class="container py-5">

            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">

                <h5 class="fw-bold text-primary text-uppercase">Tech Stack & Extensive Experience </h5>

                <h2 class="mb-0">Expertise with a comprehensive tech stack and abundant experience.</h2>

            </div>

            <div class="row g-5">

                

                 <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">

                    <div class=" rounded d-flex align-items-center justify-content-center text-center">

                        <img class="img-fluid rounded" src="public/assets/img/tech/1.png" style="width: 100px; height: 100px;"  title="Web Application" alt="Web Application" >

                       

                    </div>

                </div>

                 <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">

                    <div class=" rounded d-flex align-items-center justify-content-center text-center">

                        <img class="img-fluid rounded" src="public/assets/img/tech/2.png" style="width: 100px; height: 100px;"  title="Web Application" alt="Web Application">

                       

                    </div>

                </div>

                 <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">

                    <div class=" rounded d-flex align-items-center justify-content-center text-center">

                        <img class="img-fluid rounded" src="public/assets/img/tech/3.png" style="width: 100px; height: 100px;"  title="Web Application" alt="Web Application">

                       

                    </div>

                </div>

                 <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">

                    <div class=" rounded d-flex align-items-center justify-content-center text-center">

                        <img class="img-fluid rounded" src="public/assets/img/tech/4.png" style="width: 100px; height: 100px;"  title="Web Application" alt="Web Application" >

                       

                    </div>

                </div>

                 <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">

                    <div class=" rounded d-flex align-items-center justify-content-center text-center">

                        <img class="img-fluid rounded" src="public/assets/img/tech/5.png" style="width: 100px; height: 100px;"  title="Web Application" alt="Web Application" >

                       

                    </div>

                </div>

             

              

                <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">

                    <div class=" rounded d-flex align-items-center justify-content-center text-center">

                        <img class="img-fluid rounded" src="public/assets/img/tech/9.png" style="width: 100px; height: 100px;"   title="Web Application" alt="Web Application">

                       

                    </div>

                </div>

                <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">

                    <div class=" rounded d-flex align-items-center justify-content-center text-center">

                        <img class="img-fluid rounded" src="public/assets/img/tech/10.png" style="width: 100px; height: 100px;"  title="Web Application" alt="Web Application" >

                       

                    </div>

                </div>

                <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">

                    <div class=" rounded d-flex align-items-center justify-content-center text-center">

                        <img class="img-fluid rounded" src="public/assets/img/tech/11.png" style="width: 100px; height: 100px;"  title="Web Application" alt="Web Application" >

                       

                    </div>

                </div>

                <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">

                    <div class=" rounded d-flex align-items-center justify-content-center text-center">

                        <img class="img-fluid rounded" src="public/assets/img/tech/12.png" style="width: 100px; height: 100px;"  title="Web Application" alt="Web Application" >

                       

                    </div>

                </div>

                <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">

                    <div class=" rounded d-flex align-items-center justify-content-center text-center">

                        <img class="img-fluid rounded" src="public/assets/img/tech/14.png" style="width: 100px; height: 100px;"  title="Web Application" alt="Web Application">

                       

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Work Process End -->



    @include('Frontend.quote') 



@endsection