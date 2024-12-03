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
                    <h1 class="display-4 text-white animated zoomIn mb-3">IT Staffing Services</h1>
                    <a  class="h5 text-white" title="Efficiency Unleashed: Tailored IT Staff Augmentation at Your Service">Efficiency Unleashed: Tailored IT Staff Augmentation at Your Service</a>
                  
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
                    <img class="img-fluid w-100 rounded mb-5" src="public/assets/img/services/techsoch_augmetation.jpg" alt="techsoch_augmetation" title="techsoch_augmetation">
                    <h2 class="mb-4">IT Staff Augmentation Services</h2>

                    <p>Does your business need software engineers with a specific skill set for short-term tasks or perhaps a long-term technical partner with a trusted, experienced, and talented team? Staff augmentation by TechSoch offers expertise on request, providing the skills you need for a successful digital outcome.</p>

                    <p>TechSoch that offers IT Staff Augmentation Services specializes in augmenting or expanding a client's existing IT workforce by providing skilled IT professionals on a temporary or contract basis. This approach allows the client to quickly ramp up their team with the right talent to meet project demands or fill skill gaps.</p>


                    <p> Recruitment remains a significant hurdle in the tech industry. Acquiring the ideal talent, balancing costs, and ensuring timely hires can be a burdensome and expensive task. Embracing IT staff augmentation services enables you to swiftly adjust your team size to match project requirements.</p>

                    <p>Our staffing teams present an opportunity to enhance your current software project teams by integrating skilled engineering professionals from TechSoch. We have the capability to supply highly qualified experts proficient in software development, web development, mobile development, UI/UX design, DevOps and more.</p>
                  
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

    @include('Frontend.quote') 

@endsection