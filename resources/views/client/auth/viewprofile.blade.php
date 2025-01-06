@extends('client/layouts/app')
@push('style')
@endpush
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Profile</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="container my-auto">
                                <div class="row">
                                    <div class="col-lg-12 col-md-8 col-12 mx-auto">
                                        <div class="card z-index-0 fadeIn3 fadeInBottom">

                                            <div class="card-body">

                                                <div style="text-align:center">
                                                    <h3>Profile</h3>
                                                </div>
                                                <form>
                                                    <div class="container rounded bg-white mt-0">
                                                        <div class="row justify-content-center align-items-center">
                                                            <div class="col-md-6">
                                                                <div class="p-3">
                                                                    <div class="row">
                                                                        <div
                                                                    class="d-flex flex-column align-items-center text-center p-3 py-0">
                                                                    @if (auth()->user()->profile_image)
                                                                        <img src="{{ asset('storage/' . auth()->user()->profile_image) }}"
                                                                            alt="Profile Picture" width="100">
                                                                    @else
                                                                        <img class="rounded-circle mt-5"
                                                                            src="{{ asset('assets/img/profile.png') }}"
                                                                            width="90">
                                                                    @endif

                                                                    <span
                                                                        class="font-weight-bold">{{ old('name', auth()->user()->name) }}</span><span
                                                                        class="text-black-50">{{ old('name', auth()->user()->email) }}  |
                                                                        {{auth()->user()->mobile }}</span>
                                                                </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <label for="username" class="form-label"><b>Name</b></label>
                                                                        <div class="col-md-12"><input type="text"
                                                                                class="form-control" name="name"
                                                                                placeholder="Full name"
                                                                                value="{{ old('name', auth()->user()->name) }}"
                                                                                disabled></div>

                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <label for="username" class="form-label"><b>Email</b></label>
                                                                        <div class="col-md-12"><input type="text"
                                                                            class="form-control" name="email"
                                                                            value="{{ old('email', auth()->user()->email) }}"
                                                                            placeholder="Email" disabled></div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <label for="username" class="form-label"><b>Mobile No.</b></label>
                                                                        <div class="col-md-12"><input type="number"
                                                                                class="form-control" name="mobile"
                                                                                value="{{ old('mobile', auth()->user()->mobile) }}"
                                                                                placeholder="Phone number" disabled></div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <label for="username" class="form-label"><b>Username</b></label>
                                                                        <div class="col-md-12"><input type="text"
                                                                                class="form-control" name="username"
                                                                                value="{{ old('username', auth()->user()->username) }}"
                                                                                placeholder="User name" disabled></div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <label for="username" class="form-label"><b>Flat No.</b></label>
                                                                        <div class="col-md-12"><input type="text"
                                                                                class="form-control" name="username"
                                                                                value="{{ old('username', auth()->user()->flat_no) }}"
                                                                                placeholder="User name" disabled></div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <label for="username" class="form-label"><b>City</b></label>
                                                                        <div class="col-md-12"><input type="text"
                                                                                class="form-control" placeholder="City"
                                                                                name="city"
                                                                                value="{{ old('city', auth()->user()->city) }}"
                                                                                disabled></div>

                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>

                                                            
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('script')
@endpush
