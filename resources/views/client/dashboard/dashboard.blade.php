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

                                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                                  @if($notice)
                                    <div class="card">
                                      <div class="card-header p-2 ps-3">
                                        <div class="d-flex justify-content-center text-center">
                                          <div>
                                            <h4 class="mb-0">{{ $notice->title ?? '' }}</h4>
                                            <p class="text-sm mb-0 text-capitalize">{{ $notice->description ?? '' }}</p>
                                          </div>
                                        </div>
                                      </div>
                                      <hr class="dark horizontal my-0">
                                      <div class="card-footer d-flex justify-content-between">
                                        <h3 class="mb-0 text-sm">{{ $notice->notice_date ?? ''}}</h3>
                                        <h3 class="mb-0 text-sm dashboard-info"> <i class="material-symbols-rounded position-relative ms-auto text-lg me-1 my-auto">person</i>{{ $notice->created_by_name ?? ''}}</h3>
                                      </div>
                                    </div>
                                    @else
                                    {{-- <div class="card">No data</div> --}}
                                    @endif
                                  </div>
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
