@extends('client/layouts/app')
@push('style')
@endpush
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="ms-0">
                <h3 class="mb-0 h4 font-weight-bolder">Dashboard</h3>

            </div>
           
            <div class="card-body px-0 pb-2 mt-5">
                {{-- <div class="table-responsive p-0"> --}}
                <div class="container my-auto">
                    {{-- <div class="row"> --}}
                    <div class="col-lg-12 col-md-8 col-12 mx-auto">
                        <div class="z-index-0 fadeIn3 fadeInBottom">

                            <div class="card-body">

                                {{-- <div style="text-align:center"><h3>Notice Board</h3></div> --}}

                                <!---start card -->
                                <div class="card-group gap-3">
                                    {{-- @foreach ($latestNotice as $notice) --}}
                                    <div class="card py-2 my-card-style" data-animation="true">
                                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                           
                                            <div class="colored-shadow"
                                                style="background-image: url(&quot;https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/products/product-1-min.jpg&quot;);">
                                            </div>
                                        </div>
                                        <div class="card-body text-center self-padding">
                                            <h5 class="font-weight-normal mt-3 title-style">
                                                <a href="javascript:;" class="text-white">{{ $notice->title }}</a>
                                            </h5>
                                            <p class="mb-0">
                                                {{ $notice->description }}
                                            </p>
                                        </div>
                                        <hr class="dark horizontal my-0">
                                        <div class="card-footer d-flex">
                                            <p class="font-weight-normal my-auto">{{ $notice->notice_date }}</p>
                                            <i
                                                class="material-symbols-rounded position-relative ms-auto text-lg me-1 my-auto">person</i>
                                            <p class="text-sm my-auto"> {{ $notice->created_by_name }}</p>
                                        </div>
                                    </div>
                                    {{-- @endforeach --}}

                                </div>

                                <!---end card -->
                            </div>
                        </div>
                    </div>
                    {{-- </div> --}}
                </div>
                {{-- </div> --}}
            </div>
        </div>
    @endsection
    @push('script')
    @endpush
