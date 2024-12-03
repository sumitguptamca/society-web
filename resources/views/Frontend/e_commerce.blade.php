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
                    <h1 class="display-4 text-white animated zoomIn mb-3">eCommerce Solution</h1>
                    <a  class="h5 text-white" title="Drive Business Growth with Our All-Inclusive eCommerce Development Services">Drive Business Growth with Our All-Inclusive eCommerce Development Services</a>
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
                    <img class="img-fluid w-100 rounded mb-5" src="public/assets/img/services/techsoch_ecommerce.png" alt="techsoch_ecommerce" title="techsoch_ecommerce" >
                    <h2 class="mb-4">eCommerce Website & Application Development</h2>
                    <p>eCommerce website development in India thrives on open-source platforms and comprehensive CMS access. The vast array of solutions from the e-commerce community is elevating web development's role in internet marketing and business ethics.</p>

                    <p> TechSoch, a leading eCommerce development company in India, is the result of years of dedication and experience. Our aim is success, offering a broad range of features comparable to high-end organizations. We prioritize high-quality, customer-friendly, and forward-thinking e-commerce website development services, catering to both local and global consumer needs, leveraging CMS and MVC framework for efficient page modeling.</p>

                    <p>Our e-commerce solutions encompass:
                        <ul style="list-style-type: none;">
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Performance optimization for enhanced profitability and productivity</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Cost-effective downtime reduction strategies</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Enhancing customer feedback and product ratings stability</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Maximizing revenue growth through strategic product category management</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Delivering scalable 24/7 support</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Keeping online stores, categories, and orders up-to-date</li>
                            <li><i class="bi bi-arrow-right text-primary me-2"></i>Enabling precise product targeting and facilitating cross-channel coordination with vendors and product suppliers.</li>
                        </ul>
                    </p>
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
                <h5 class="fw-bold text-primary text-uppercase">Varied eCommerce Development Services</h5>
                <h2 class="mb-0">We offer dependable eCommerce development services to empower your business.</h2>
            </div>
            <div class="row g-5">
                
                <div class="col-lg-12 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-4">
                            <img src="public/assets/img/icon/ecommerce_service.png" alt="Web Application" style="width:80px;height: 80px;" title="ecommerce_service" />
                            <div class="ps-4">
                                <h4 class="mb-3">eCommerce Consultation</h4>
                                <p>Acquiring a range of eCommerce consulting services is vital for making your business a symbol of success in the eCommerce market. These services provide valuable insights into eCommerce solution development, ensuring business expansion and security.</p>
                                <!-- <a class="text-uppercase" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-12 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-4">
                            
                            <div class="ps-4">
                                <h4 class="mb-3">eCommerce UI/UX Design</h4>
                                <p>As a top eCommerce development service provider, TechSoch excels in delivering unmatched experiences for innovative and responsive eCommerce solutions. Our expert designers craft designs aligned with your vision and future goals.</p>
                                <!-- <a class="text-uppercase" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a> -->
                            </div>
                             <img src="public/assets/img/icon/ecommerce_design.png" alt="Web Application" style="width:80px;height: 80px;"  title="ecommerce_design.png"/>
                        </div>
                    </div>
                </div>
               <div class="col-lg-12 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-4">
                             <img src="public/assets/img/icon/ecommerce-plugin.png" alt="Web Application" style="width:80px;height: 80px;" title="ecommerce-plugin.png"/>
                            <div class="ps-4">
                                <h4 class="mb-3">Custom Modules & Plugins</h4>
                                <p>Our eCommerce app developers are dedicated to offering tailored modules and plugin development services based on your project specifications. This customization enhances the functionality of your online store, propelling your eCommerce business to the next level.</p>
                                <!-- <a class="text-uppercase" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-12 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-4">
                            
                            <div class="ps-4">
                                <h4 class="mb-3">eCommerce Solution Development</h4>
                                <p> our expert team prioritizes delivering engaging user experiences in every solution. We follow a structured development process, ensuring proper code execution to align with the client's desires.</p>
                                <!-- <a class="text-uppercase" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a> -->
                            </div>
                            <img src="public/assets/img/icon/ecommerce_development.png" alt="Web Application" style="width:80px;height: 80px;" title="ecommerce_development"/>
                        </div>
                    </div>
                </div>
               <div class="col-lg-12 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-4">
                            <img src="public/assets/img/icon/ecommerce_migration.png" alt="Web Application" style="width:80px;height: 80px;" title=/ecommerce_migration" />
                            <div class="ps-4">
                                <h4 class="mb-3">eCommerce Platform Migration</h4>
                                <p>TechSoch facilitates smooth transitions for eCommerce businesses looking to migrate websites or apps to other platforms. We guide in selecting the best eCommerce platform, ensuring an enhanced customer experience.</p>
                                <!-- <a class="text-uppercase" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-12 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-4">
                            
                            <div class="ps-4">
                                <h4 class="mb-3">Solution Maintenance & Support</h4>
                                <p>We prioritize providing feature-rich, seamless, and secure eCommerce solutions. With our post-launch support and maintenance, businesses can enjoy uninterrupted operations.</p>
                                <!-- <a class="text-uppercase" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a> -->
                            </div>
                           <img src="public/assets/img/icon/ecommerce_maintainance.png" alt="Web Application" style="width:80px;height: 80px;" title="ecommerce_maintainance"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-4">
                             <img src="public/assets/img/icon/ecommerce_cms.png" alt="Web Application" style="width:80px;height: 80px;" title="ecommerce_cms" />
                            <div class="ps-4">
                                <h4 class="mb-3">CMS Integration</h4>
                                <p>Our seamless CMS integration into eCommerce solutions caters to a spectrum of business needs. This enables business owners, irrespective of their size, to effortlessly create, modify, and publish digital content, enhancing efficiency and functionality.</p>
                                <!-- <a class="text-uppercase" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-12 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-4">
                            
                            <div class="ps-4">
                                <h4 class="mb-3">API Integration</h4>
                                <p>TechSoch excels in eCommerce site development with seamless API integration, allowing marketers to adapt to dynamic customer demands by selecting essential elements from diverse platforms.</p>
                                <!-- <a class="text-uppercase" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a> -->
                            </div>
                           <img src="public/assets/img/icon/web_api.png" alt="Web Application" style="width:80px;height: 80px;" title="web_api" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-4">
                             <img src="public/assets/img/icon/ecommerce_payment.png" alt="Web Application" style="width:80px;height: 80px;" title="ecommerce_payment"/>
                            <div class="ps-4">
                                <h4 class="mb-3">Payment Gateway Integration</h4>
                                <p>We ensure secure and swift payment gateway integration in eCommerce platforms, offering seamless transactions for customers and efficient card verification and fund transfers for businesses.</p>
                                <!-- <a class="text-uppercase" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a> -->
                            </div>
                            
                        </div>
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
                        <img class="img-fluid rounded" src="public/assets/img/tech/magneto.png" style="width: 100px; height: 100px;"  title="magneto" alt="magneto.png">
                       
                    </div>
                </div>
                 <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">
                    <div class=" rounded d-flex align-items-center justify-content-center text-center">
                        <img class="img-fluid rounded" src="public/assets/img/tech/opencart.png" style="width: 120px; height: 100px;"  title="opencart" alt="opencart.png" >
                       
                    </div>
                </div>
                 <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">
                    <div class=" rounded d-flex align-items-center justify-content-center text-center">
                        <img class="img-fluid rounded" src="public/assets/img/tech/shopify.png" style="width: 100px; height: 100px;"  title="shopify" alt="shopify.png" >
                       
                    </div>
                </div>
                 <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">
                    <div class=" rounded d-flex align-items-center justify-content-center text-center">
                        <img class="img-fluid rounded" src="public/assets/img/tech/woo.png" style="width: 120px; height: 120px;" title="woo" alt="woo.png" >
                       
                    </div>
                </div>
                 <div class="col-lg-2 wow zoomIn" data-wow-delay="0.3s">
                    <div class=" rounded d-flex align-items-center justify-content-center text-center">
                        <img class="img-fluid rounded" src="public/assets/img/tech/wordpress.png" style="width: 100px; height: 100px;" title="wordpress" alt="wordpress.png">
                       
                    </div>
                </div>
                
              
                
                
            </div>
        </div>
    </div>
    
@include('Frontend.quote') 

@endsection