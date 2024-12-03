@extends('layouts.master') 
@section('techsoch') 
@section('title')
{{$metaTags['title'] ?? ''}}
@stop
@section('description', $metaTags['description'] ?? '')
@section('keywords', $metaTags['keywords'] ?? '')





<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ URL::asset('/assets/img/26.png')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome to Ganesh Society</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Be Smart In Managing Housing Society Online</h1>
                            <p class="oscar_discription">We help to provide services like instant maintenance bill generation, smart notification through mobile apps, pay maintenance bills by CC / DC / NB, Alert reminder on outstanding dues, Instant notices & circulars, fully integrated accounting system with automated</p>
                            <a href="" class="btn btn-dark py-md-3 px-md-5 me-3 animated slideInLeft">View More</a>
                            <!--<a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>-->
                            
                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ URL::asset('/assets/img/26.png')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome to Ganesh Society</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Be Smart In Managing Housing Society Online</h1>
                            <p class="oscar_discription">We help to provide services like instant maintenance bill generation, smart notification through mobile apps, pay maintenance bills by CC / DC / NB, Alert reminder on outstanding dues, Instant notices & circulars, fully integrated accounting system with automated</p>
                            <a href="" class="btn btn-dark py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>
                           <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>



<!--         -->

<!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded1 wow zoomIn" data-wow-delay="0.3s" src="{{ URL::asset('/assets/img/52.png')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title-2 position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                        <h1 class="mb-20">Ganesh Housing Society Gate Management System</h1>
                        <p class="m-0">Lorem ipsum odor amet, consectetuer adipiscing elit. Taciti morbi quis magna eros enim. Id justo conubia mus metus facilisi primis. </p>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 wow zoomIn" data-wow-delay="0.6s">
                            <div class="service-item bg-light1 rounded d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="service-icon">
                                   <i class="bi bi-people text-white"></i>
                                </div>
                                <h4 class="mb-3">Visitor Management</h4>
                                <p class="m-0">Track entry-exit of visitors, cabs & delivery personnels. Invite your guests & allow them to facilitate a relatively much faster check-in process as low as 5 seconds.</p>
                                <!--<a class="btn btn-lg btn-dark rounded" href="">-->
                                <!--    <i class="bi bi-arrow-right"></i>-->
                                <!--</a>-->
                            </div>
                        </div>
                        <div class="col-md-6 wow zoomIn" data-wow-delay="0.9s">
                            <div class="service-item bg-light1 rounded d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="service-icon">
                                   <i class="bi bi-car-front-fill text-white"></i>
                                   <i class="fa fa-car text-white"></i>
                                </div>
                                <h4 class="mb-3">Parking Management</h4>
                                <p class="m-0">Seamlessly manage parking lots, allocate parking spaces & retrieve vehicle owner details thus resolving parking issues.</p>
                                <!--<a class="btn btn-lg btn-dark rounded" href="">-->
                                <!--    <i class="bi bi-arrow-right"></i>-->
                                <!--</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-7">
                    <div class="row g-5">
                        <div class="col-md-6 wow zoomIn" data-wow-delay="0.3s">
                            <div class="service-item bg-light1 rounded d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="service-icon">
                                    <!--<i class="fa fa-user-md text-white"></i>-->
                                  
                                    <i class="fa fa-info-circle text-white"></i>
                                </div>
                                <h4 class="mb-3">Daily Help Management</h4>
                                <p class="m-0">Instant in-application notifications are sent to residents upon entry exit of daily help providers. Their monthly attendance can also be tracked.</p>
                                <!--<a class="btn btn-lg btn-dark rounded" href="">-->
                                <!--    <i class="bi bi-arrow-right"></i>-->
                                <!--</a>-->
                            </div>
                        </div>
                        <div class="col-md-6 wow zoomIn" data-wow-delay="0.6s">
                            <div class="service-item bg-light1 rounded d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="service-icon">
                                   
                                    <i class="fa fa-gift text-white"></i>

                                </div>
                                <h4 class="mb-3">Parcel Delivery Management</h4>
                                <p class="m-0">Hosts receive an in-application notification approval with visitor details and image to approve, deny or hold their entries.</p>
                                <!--<a class="btn btn-lg btn-dark rounded" href="">-->
                                <!--    <i class="bi bi-arrow-right"></i>-->
                                <!--</a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-dark1 rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Call Us For A Quote</h3>
                        <p class="text-white mb-3">Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est magna stet eirmod</p>
                        <h2 class="text-white mb-0">+91 000 0000 000</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    
    
    
     <!--About1 Start -->
    <div class="container-fluid pt-5 wow fadeInUp bg-section-color" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-9">
                    <div class="section-title-2 position-relative pb-3 mb-2">
                        <!--<h5 class="fw-bold text-primary text-uppercase">About Us</h5>-->
                        <h1 class="mb-0">COVID-19 Combat Kit</h1>
                    </div>
                    <p class="mb-4">Lorem ipsum odor amet, consectetuer adipiscing elit. Scelerisque tortor ex suscipit nisi pharetra porta mi curabitur suscipit. Praesent faucibus integer consequat facilisis accumsan purus hac varius. Laoreet vitae magna feugiat nulla nostra nunc. Aptent phasellus urna scelerisque duis ipsum non inceptos mus ligula. Ultricies ultrices tincidunt praesent litora urna. Molestie hac massa nam ex ac. Rhoncus commodo senectus aptent maecenas hendrerit. Vehicula venenatis erat enim molestie congue egestas libero dapibus.</p>
                   
                </div>
                <div class="col-lg-3" style="min-height: 300px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ URL::asset('/assets/img/51.png')}}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--About1 End -->
     
       <!--About2 Start -->
    <div class="container-fluid pt-5 wow fadeInUp " data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                  <div class="col-lg-3" style="min-height: 300px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ URL::asset('/assets/img/54.png')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="section-title-2 position-relative pb-3 mb-2">
                        <!--<h5 class="fw-bold text-primary text-uppercase">About Us</h5>-->
                        <h1 class="mb-0">Online Bill Management</h1>
                    </div>
                    <p class="mb-4">
                        
                       Ganesh Society cloud accounting solution provides you services like online bill Management system. Admin can generate maintenance bills of the resident members instantaneously and cans sent it to the members in just once click enabling members to easily pay their dues online.<br>
- Generate Maintenance bills online<br>
- Member can easily pay their bills online<br>
- Get instant update once payments are made by members</p>
                   
                </div>
              
            </div>
        </div>
    </div>
     <!--About2 End -->


     <!--About3 Start -->
    <div class="container-fluid pt-5 wow fadeInUp bg-section-color" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-9">
                    <div class="section-title-2 position-relative pb-3 mb-2">
                        <!--<h5 class="fw-bold text-primary text-uppercase">About Us</h5>-->
                        <h1 class="mb-0">Complaint Management</h1>
                    </div>
                    <p class="mb-4">In order to dispose the members complaints, the society Admin / secretary can create / assign the “Complaint Handler” basis the complaint category. The complaint handler can not only track the status in real time but can revert to the complaints immediately. It provides options like;<br>

- Create Categories of Complaints<br>
- Create Complaint Handlers<br>
- Generate Complaints Ticket / Track Status<br>
- Escalate / Check & Control</p>
                   
                </div>
                <div class="col-lg-3" style="min-height: 300px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ URL::asset('/assets/img/55.png')}}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--About3 End -->
     
        <!--About4 Start -->
    <div class="container-fluid pt-5 wow fadeInUp " data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                  <div class="col-lg-3" style="min-height: 300px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ URL::asset('/assets/img/facility.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="section-title-2 position-relative pb-3 mb-2">
                        <!--<h5 class="fw-bold text-primary text-uppercase">About Us</h5>-->
                        <h1 class="mb-0">Facility Management </h1>
                    </div>
                    <p class="mb-4">Lorem ipsum odor amet, consectetuer adipiscing elit. Scelerisque tortor ex suscipit nisi pharetra porta mi curabitur suscipit. Praesent faucibus integer consequat facilisis accumsan purus hac varius. Laoreet vitae magna feugiat nulla nostra nunc. Aptent phasellus urna scelerisque duis ipsum non inceptos mus ligula. Ultricies ultrices tincidunt praesent litora urna. Molestie hac massa nam ex ac. Rhoncus commodo senectus aptent maecenas hendrerit. Vehicula venenatis erat enim molestie congue egestas libero dapibus.</p>
                   
                </div>
              
            </div>
        </div>
    </div>
     <!--About4 End -->










@endsection