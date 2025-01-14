@extends('admin/layouts/app')
@push('style')
@endpush
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="ms-0">
                <h3 class="mb-0 h4 font-weight-bolder">Dashboard</h3>

            </div>
            <div class="col-xl-2 col-sm-6 mb-xl-0 mb-2 mt-5">
                <div class="card">
                    <div class="card-header p-2 ps-2">
                        <div class="d-flex justify-content-center text-center">
                            <div>
                                <p class="text-sm mb-0 text-capitalize">Flat Owner</p>
                                <h4 class="mb-0">{{$flatownerCount}}</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
    @endsection
    @push('script')
    @endpush
