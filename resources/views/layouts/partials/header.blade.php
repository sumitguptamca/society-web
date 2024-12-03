<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ url('/')}}" class="navbar-brand p-0">
        <h2 class="m-0">
            <!--<img src="{{ URL::asset('public/assets/img/logo/logo_trans.png')}}" alt="TechSoch logo">TechSoch-->
             <img src="{{ URL::asset('/assets/img/59.svg')}}" alt="Ganeshji">
             <!--<img src="{{ URL::asset('public/assets/img/logo/new logo with shadow01.svg')}}" alt="TechSoch logo">-->
        </h2>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <div class="nav-item dropdown">
                <a href="{{ url('/')}}" class="nav-item nav-link ">Home</a>
            </div>
            <!--<div class="nav-item dropdown">-->
            <!--    <a href="{{ url('about1')}}" class="nav-link nav-link">About us</a>-->
            <!--</div>-->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Core Features</a>
                <div class="dropdown-menu m-0">
                    <!--<a href="{{ url('software1')}}" class="dropdown-item">Security Systems</a>-->
                    <!--<a href="{{ url('web-dev1')}}" class="dropdown-item">Audio Visual</a>-->
                    <!--<a href="{{ url('mobile-app1')}}" class="dropdown-item">Control Systems</a>-->
                    <!--<a href="{{ url('e-commerce1')}}" class="dropdown-item">Power Systems</a>-->
                    <!--<a href="{{ url('ui-ux1')}}" class="dropdown-item">Light Control Systems</a>-->
                    <!--<a href="{{ url('digital-marketing1')}}" class="dropdown-item">Parking Management Systems</a>-->
                    <!--<a href="{{ url('outsource1')}}" class="dropdown-item">IT Hardware and Systems</a>-->
                    <!--<a href="{{ url('support1')}}" class="dropdown-item">Automatic Vehicle Location</a>-->
                    <!--<a href="{{ url('portfolio1')}}" class="dropdown-item">Barcode Systems</a>-->
                    
                                        <a href="#" class="dropdown-item">Committee</a>
                    <a href="#" class="dropdown-item">Member</a>
                    <a href="#" class="dropdown-item">Gate Management</a>
                 
                  
                    
                    
                </div>
            </div>
            <div class="nav-item dropdown">
                <!--<a href="{{ url('portfolio1')}}" class="nav-link nav-link">Legal Assistance</a>-->
                
                 <a href="#" class="nav-link nav-link">Legal Assistance</a>
            </div>
             <div class="nav-item dropdown">
                <!--<a href="{{ url('industries1')}}" class="nav-link nav-link">Vendors</a>-->
                 <a href="{{ url('faq')}}" class="nav-link nav-link">Faq</a>
            </div>
            <div class="nav-item dropdown">
                <!--<a href="{{ url('industries1')}}" class="nav-link nav-link">Blog</a>-->
                
                 <a href="{{ url('contact')}}" class="nav-link nav-link">Contact us</a>
            </div>
            <!--<div class="nav-item dropdown">-->
            <!--    <a href="{{ url('industries1')}}" class="nav-link nav-link">Careers</a>-->
            <!--</div>-->
            <!-- <a href="{{ url('contact1')}}" class="nav-item nav-link">Contact Us</a> -->
        </div>
        <!--<a href="{{ url('contact1')}}" class="btn btn-primary py-2 px-3 ms-3" id="btnOpenForm">Contact us</a>-->
        
         <a href="#" class="btn btn-dark border-radias-header py-2 px-3 ms-3" id="btnOpenForm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg> Login</a>
    </div>
</nav>