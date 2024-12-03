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
                    <h1 class="display-4 text-white animated zoomIn mb-3">Digital Marketing Company</h1>
                    <a  class="h5 text-white" title="Empower Your Brand with Strategic Digital Marketing Solutions">Empower Your Brand with Strategic Digital Marketing Solutions</a>
                  
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
                    <img class="img-fluid w-100 rounded mb-5" src="public/assets/img/services/techsoch_digital_marketing.jpeg" alt="techsoch_digital_marketing.jpeg" title="techsoch_digital_marketing">
                    <h2 class="mb-4">Digital Marketing Empowerment: Strategies for Brand Growth</h2>
                    <p>TechSoch is a cutting-edge digital marketing firm that empowers brands to effectively engage with their target audience through complete digital transformation. We elevate a brand's online presence through a combination of performance-driven strategies, creative initiatives, the latest methodologies, and innovation. we empower our clients to expand their business leveraging various digital marketing platforms and channels.</p>

                    <p>Securing top organic rankings on major search engines, particularly Google, is a critical factor for business success. We is committed to assisting clients in achieving higher organic traffic. Our focus is on aiding clients in establishing a strong brand presence, ensuring global visibility.</p>

                    <p> The realm of Digital Marketing encompasses various facets, including SEO, SEM, content marketing, campaign promotions, and e-commerce advertising. Additionally, it extends to offline channels such as social media on mobile devices, ringtones, email, social media marketing, e-books, optical games, display advertising, and a multitude of other forms of advanced digital media.</p>

                  
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
                <h5 class="fw-bold text-primary text-uppercase">Digital Marketing Services</h5>
                <h2 class="mb-0">Comprehensive Digital Marketing Services for Business Growth.</h2>
            </div>
            <div class="row g-5">
                
                <div class="col-lg-12 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-4">
                             <img src="public/assets/img/icon/digital_seo.png" alt="Web Application" style="width:80px;height: 80px;" title="Web Application" />
                            <div class="ps-4">
                                <h4 class="mb-3">Search Engine Optimisation (SEO)</h4>
                                <p>SEO, is the practice of optimizing a website to improve its visibility and ranking in organic (unpaid) search engine results. It involves various techniques and strategies aimed at enhancing the website's relevance, authority, and user experience, ultimately driving more organic traffic from search engines.</p>
                              
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-12 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-4">
                            
                            <div class="ps-4">
                                <h4 class="mb-3">Search Engine Marketing (SEM)</h4>
                                <p>SEM involves strategies to enhance a website's visibility and attract more traffic through paid advertising and marketing efforts on search engines. It encompasses pay-per-click (PPC) advertising, paid search ads, and other paid marketing methods to boost a website's presence and drive targeted traffic to achieve specific marketing objectives.</p>
                                <!-- <a class="text-uppercase" href="">Read More<i class="bi bi-arrow-right ms-2"></i></a> -->
                            </div>
                            <img src="public/assets/img/icon/digital_sem.png" alt="Web Application" style="width:80px;height: 80px;" title="Web Application"/>
                        </div>
                    </div>
                </div>
               <div class="col-lg-12 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-4">
                            <img src="public/assets/img/icon/digital_smm.png" alt="Web Application" style="width:80px;height: 80px;" title="Web Application" />
                            <div class="ps-4">
                                <h4 class="mb-3">Social Media Marketing (SMM)</h4>
                                <p> SMM involves creating and sharing content, engaging with the audience, running paid advertising campaigns, and analyzing results to optimize strategies. SMM aims to drive website traffic, increase conversions, and foster a positive brand image through social media channels.</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-12 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service3-item bg-light rounded">
                        <div class="position-relative d-flex p-4">
                            
                            <div class="ps-4">
                                <h4 class="mb-3">EMAIL MARKETING</h4>
                                <p> Email Marketing is a digital marketing strategy that involves sending targeted messages or campaigns to a group of recipients via email.It aims to engage recipients, drive traffic, nurture leads, and ultimately, convert leads into customers, all while building brand loyalty and trust.</p>
                               
                            </div>
                            <img src="public/assets/img/icon/digital_marketing.png" alt="Web Application" style="width:80px;height: 80px;" title="digital_marketing" />
                        </div>
                    </div>
                </div>
              
               
                
            </div>
        </div>
    </div>
    <!-- Service End -->

  
@include('Frontend.quote') 

@endsection