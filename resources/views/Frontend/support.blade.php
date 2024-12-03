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
                    <h1 class="display-4 text-white animated zoomIn mb-3">Support & Maintenance</h1>
                    <a  class="h5 text-white" title="Round-the-Clock Support & Maintenance for Your Success">Round-the-Clock Support & Maintenance for Your Success</a>
                  
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
                    <img class="img-fluid w-100 rounded mb-5" src="public/assets/img/services/techsoch_maintenance.png" alt="techsoch_maintenance" title="techsoch_maintenance">
                    <h2 class="mb-4">Application Support and Maintenance Services  </h2>

                    <p>The significance of the post-implementation stage is equivalent to that of the development and deployment phases in your software solution journey. Engaging in comprehensive software maintenance services during this stage can markedly amplify your likelihood of realizing the business objectives you aspire to achieve.</p>

                    <p>TechSoch that offers application support and maintenance services specializes in ensuring the optimal performance, security, and functionality of software applications after their deployment. These services are essential for businesses that want to keep their applications running smoothly, address any issues promptly, and adapt to evolving needs and technologies.</p>

                    <p>For software needing ongoing support, our team is prepared to accommodate your maintenance requirements, even during your peak operational periods. Whether you're a large e-commerce platform requiring extended hours during high-demand sales seasons, we've got you taken care of. Our commitment to delivering exceptional support guarantees seamless operations for your systems around the clock.</p>
                  
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

       <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
         <div class="section-title-1 position-relative pb-3 mb-5">
             
                 <h2 class="mb-0">We offer app support and upkeep for various solutions</h2>
            </div>
            <div class="row g-5">
              
                <div class="col-lg-6" >
                    
                    <div class="row gx-3">
                        <div class="col-sm-12 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-4">  <img src="public/assets/img/icon/maintainance.png" alt="Web Application" style="width:30px;height: 30px; margin-right: 10px;" title="maintainance" />Website Support & Maintenance </h5>
                        </div>
                        
                    </div>
                    <p class="mb-4 wow zoomIn" data-wow-delay="0.6s">Our website maintenance and support services encompass:

                        <ul style="list-style-type: none;">
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Software Updates for Websites</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Website Speed Enhancement</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Security Scanning and Patching</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Website Analytics Monitoring</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Link Maintenance</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>HTML Error Correction</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>File Backups</li>
                        </ul>
                    </p>

                  
                </div>
               
                 <div class="col-lg-6">
                    
                    <div class="row gx-3">
                        <div class="col-sm-12 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"> <img src="public/assets/img/icon/maintainance.png" alt="Web Application" style="width:30px;height: 30px; margin-right: 10px;" title="maintainance" />Mobile Support & Maintenance </h5>
                        </div>
                        
                    </div>
                     <p class="mb-4 wow zoomIn" data-wow-delay="0.6s">Our Mobile maintenance and support services encompass:

                        <ul style="list-style-type: none;">
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Bug Resolutions</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>App Upgrades</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>OS and Library Upkeep</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>App Monitoring</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Code Maintenance</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Application Security Oversight</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Performance Improvements</li>
                        </ul>
                    </p>

                  
                </div>
                 <div class="col-lg-6">
                    
                    <div class="row gx-3">
                        <div class="col-sm-12 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"> <img src="public/assets/img/icon/maintainance.png" alt="Web Application" style="width:30px;height: 30px; margin-right: 10px;" title="eCommerce Support & Maintenance" />eCommerce Support & Maintenance </h5>
                        </div>
                        
                    </div>
                     <p class="mb-4 wow zoomIn" data-wow-delay="0.6s">Our eCommerce maintenance and support services encompass:

                        <ul style="list-style-type: none;">
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>System Analysis and Diagnosing</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Feature Enhancements</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Security and Performance Auditing</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Website Analytics Monitoring</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Workaround Implementation</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Updates and New Releases</li>
                            
                        </ul>
                    </p>

                  
                </div>
                 <div class="col-lg-6">
                    
                    <div class="row gx-3">
                        <div class="col-sm-12 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"> <img src="public/assets/img/icon/maintainance.png" alt="Web Application" style="width:30px;height: 30px; margin-right: 10px;" tite="ERP Support & Maintenance" />ERP Support & Maintenance </h5>
                        </div>
                        
                    </div>
                    <p class="mb-4 wow zoomIn" data-wow-delay="0.6s">Our ERP maintenance and support services encompass:

                        <ul style="list-style-type: none;">
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Post-Implementation Assistance</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Routine Backups and Patching</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Installation of Updates</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Monitoring ERP Application Servers</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Tracking ERP Backend Server Status</li>
                         
                        </ul>
                    </p>

                  
                </div>
                
            </div>
        </div>
    </div>
   
  @include('Frontend.quote') 

@endsection