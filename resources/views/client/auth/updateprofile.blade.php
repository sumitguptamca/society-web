@extends('admin/layouts/app')
@push('style')
@endpush
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Update profile</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="container my-auto">
                                <div class="row">
                                  <div class="col-lg-12 col-md-8 col-12 mx-auto">
                                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                                     
                                      <div class="card-body">
                        
                                      <div style="text-align:center"><h3>Update profile</h3></div>
                                      <form method="POST" action="{{ route('admin.update') }}" enctype="multipart/form-data">
                                        @csrf      
                                        @method('PUT')
                                        <div class="container rounded bg-white mt-5">
                                            <div class="row">
                                                <div class="col-md-4 border-right">
                                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                                        {{-- <img class="rounded-circle mt-5" src="{{ asset('assets/img/profile.png') }}" width="90"> --}}
                                                        @if(auth()->user()->image)
                                                            <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="Profile Picture" width="100">
                                                            @else
                                                            <img class="rounded-circle mt-5" src="{{ asset('assets/img/profile.png') }}" width="90">
                                                         @endif
                                                        {{-- <img class="rounded-circle mt-5" 
                                                        src="{{ auth()->user()->image ? asset('storage/app/public/' . auth()->user()->image) : asset('assets/img/profile.png') }}" 
                                                        alt="Profile Picture" 
                                                        width="90"> --}}

                                                        <span class="font-weight-bold">{{ old('name', auth()->user()->name) }}</span><span class="text-black-50">{{ old('name', auth()->user()->email) }}</span><span>{{ old('name', auth()->user()->address) }}</span></div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="p-3 py-5">
                                                        {{-- <div class="d-flex justify-content-between align-items-center mb-3">
                                                            <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                                                                <h6>Back to home</h6>
                                                            </div>
                                                            <h6 class="text-right">Edit Profile</h6>
                                                        </div> --}}
                                                        <div class="row mt-2">
                                                            <div class="col-md-6"><input type="text" class="form-control" name="name" placeholder="Full name" value="{{ old('name', auth()->user()->name) }}"></div>
                                                            <div class="col-md-6"><input type="text" class="form-control" name="email" value="{{ old('email', auth()->user()->email) }}" placeholder="Email"></div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-6"><input type="number" class="form-control" name="mobile" value="{{ old('mobile', auth()->user()->mobile) }}" placeholder="Phone number"></div>
                                                            <div class="col-md-6"><input type="text" class="form-control" name="country" value="{{ old('country', auth()->user()->country) }}" placeholder="Country"></div>
                                                            
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-6"><input type="text" class="form-control" placeholder="State" name="state" value="{{ old('state', auth()->user()->state) }}"></div>
                                                            <div class="col-md-6"><input type="text" class="form-control" placeholder="City" name="city" value="{{ old('city', auth()->user()->city) }}"></div>
                                                            
                                                        </div>
                                                        {{-- <div class="row mt-3">
                                                            <div class="col-md-6"><input type="text" class="form-control" placeholder="Bank Name" value="Bank of America"></div>
                                                            <div class="col-md-6"><input type="text" class="form-control" value="043958409584095" placeholder="Account Number"></div>
                                                        </div> --}}
                                                        <div class="form-group row mt-3">
                                                            <div class="col-md-6"><input type="text" class="form-control" name="address" placeholder="address" value="{{ old('address', auth()->user()->address) }}"></div>
                                                            <div class="col-md-6">
                                                                <input id="profile_picture" type="file" class="form-control @error('profile_picture') is-invalid @enderror" name="profile_picture" accept="image/*">
                                                                @error('profile_picture')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mt-3">
                                                            <div class="col-md-6">
                                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Password">
                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password">
                                                            </div>
                                                        </div>
                                
                                                        <div class="mt-5 text-right">
                                                            <button class="btn btn-info profile-button" type="submit">Update Profile</button>
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