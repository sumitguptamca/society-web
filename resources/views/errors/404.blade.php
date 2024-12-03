@extends('layouts.master') 
@section('techsoch')

    <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 bg-header_about" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn mb-3">Not Found</h1>
                    <a href="" class="h5 text-white">Home</a>
                    <i class="fa fa-angle-double-right text-white px-2"></i>
                    <a href="" class="h5 text-white">404</a>
                </div>
            </div>
        </div>
    </div>
    
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


    <!-- 404 Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="display-1">404</h1>
                    <h1>Page Not Found</h1>
                    <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                    <a class="btn btn-primary py-3 px-5" href="{{ url('/')}}">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
 
@endsection