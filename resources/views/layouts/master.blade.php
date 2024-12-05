<!DOCTYPE html>
<html lang="en"> 
    @include('layouts.partials.head') 
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9VCK3B7" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner"></div>
        </div>
 
        <!-- Topbar Start -->
        <!-- <div class="container-fluid bg-dark px-5 d-none d-lg-block"><div class="row gx-0"><div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0"><div class="d-inline-flex align-items-center" style="height: 45px;"><small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+91-9118991115</small><small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@techsochss.com</small></div></div><div class="col-lg-4 text-center text-lg-end"><div class="d-inline-flex align-items-center" style="height: 45px;"><a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-whatsapp fw-normal"></i></a><a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a><a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a><a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-skype fw-normal"></i></a></div></div></div></div> -->

        <!-- Navbar & Carousel Start -->
        <div class="container-fluid position-relative p-0"> 
            @include('layouts.partials.header') 

                @yield('techsoch')
                @yield('content')

            @include('layouts.partials.footer') 
            
            @include('layouts.partials.footer_script')
    </body>
    <div class="form-popup-bg">
        <div class="form-container">
            <button id="btnCloseForm" class="close-button">X</button>
            <h2>Let's Talk</h2>
            <p>For more information. Please complete this form.</p>
            <div id="alertMessagePopup"></div>
            <span class="throw_error"></span>
            <span id="success"></span>
            <form id="contactFormPopup">
                <input type="hidden" name="action" value="letstalk">
                <div class="row gx-3">
                    <div class="col-md-6 control-group">
                        <input type="text" class="form-control border-0 bg-light px-4" name="name" id="namePopup" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" style="height: 55px;">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="col-md-6 control-group">
                        <input type="email" class="form-control border-0 bg-light px-4" name="email" id="emailPopup" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" style="height: 55px;">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="col-6 control-group">
                        <input type="text" class="form-control border-0 bg-light px-4" name="phonePopup" id="phone" placeholder="Phone" required="required" data-validation-required-message="Please enter a subject" style="height: 55px;">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="col-6 control-group">
                        <select class="form-control border-0 bg-light px-4 py-3" rows="4" name="services" id="servicesPopup" placeholder="Describe your project in short" required="required" data-validation-required-message="Please enter your message">
                            <option value="Software Development">Software Development</option>
                            <option value="Website Development">Website Development</option>
                            <option value="Mobile App Development">Mobile App Development</option>
                            <option value="eCommerce Solution">eCommerce Solution</option>
                            <option value="UI/UX Design">UI/UX Design</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="IT Staffing Services">IT Staffing Services</option>
                            <option value="Support Maintenance">Support &amp; Maintenance</option>
                        </select>
                        <p class="help-block text-danger" style="color:red;"></p>
                    </div>
                    <div class="col-12 control-group">
                        <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" name="message" id="messagePopup" placeholder="Describe your project in short" required="required" data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit" id="sendMessageButtonPopup">
                            <span>SEND</span>
                            <div class="d-none spinner-border spinner-border-sm text-light ms-3" role="status"></div>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</html>