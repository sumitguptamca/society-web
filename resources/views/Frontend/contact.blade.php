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
                    <h1 class="display-4 text-white animated zoomIn mb-3">Contact us</h1>
                    <a  class="h5 text-white" title="for improved proficiency and exceptional experience">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non ex dolor</a>
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

    <!-- Contact Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <!-- <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5> -->
                <h2 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h2>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-dark d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h6 class="text-dark mb-0">+91-000 0000 000</h6>
                            <h6 class="text-dark mb-0">0522-0000000000</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-dark d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Email to get free quote</h5>
                            <h6 class="text-dark mb-0">info@gmail.com.com</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-dark d-flex align-items-center justify-content-center rounded" style="width: 120px; height: 60px;margin-bottom: 40px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Visit our office</h5>
                            <h6 class="text-dark mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 contact-form wow slideInUp" data-wow-delay="0.3s">
                    <div id="alertMessage"></div>
                    <span class="throw_error"></span>
                    <span id="success"></span>
                    <!--<form id="contactForm">-->
                    <form action="{{ route('contact.send') }}" method="POST">
                        {{ csrf_field() }}
                        <!--<input type="hidden" name="action" value="contactus">-->
                        <div class="row gx-3">
                            <div class="col-md-6 control-group">
                                <input type="text" class="form-control border-0 bg-light1 px-4" name="name" id="name" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" style="height: 55px;">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-md-6 control-group">
                                <input type="email" class="form-control border-0 bg-light1 px-4" name="email" id="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" style="height: 55px;">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-12 control-group">
                                <input type="text" class="form-control border-0 bg-light1 px-4" name="phone" id="phone" placeholder="Phone"
                                required="required" data-validation-required-message="Please enter a subject" style="height: 55px;">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-12 control-group">
                                <textarea class="form-control border-0 bg-light1 px-4 py-3" rows="4" name="message" id="message" placeholder="Message..."
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit" id="sendMessageButton">
                                    <span>SEND</span>
                                    <div class="d-none spinner-border spinner-border-sm text-light ms-3" role="status"></div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                
                   
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227821.98710530254!2d80.77769949830774!3d26.848902829067065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd991f32b16b%3A0x93ccba8909978be7!2sLucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1732284516008!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection