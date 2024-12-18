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
                            <h6 class="text-white text-capitalize ps-3">Flate Owner List</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="container my-auto">
                                <div class="row">
                                  <div class="col-lg-12 col-md-8 col-12 mx-auto">
                                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                                     
                                      <div class="card-body">
                        
                                      <div style="text-align:center"><h3>Add FlateOwner</h3></div>
                                   
                                      
                                      <form method="POST" action="{{ route('admin.flateowner.store') }}">
                                        @csrf      
                                         <div class="input-group input-group-outline my-3">
                                            {{-- <label for="name" class="form-label">{{ __('Full Name') }}</label> --}}
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Full Name">
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                          </div>
                                          <div class="col-md-6 input-group input-group-outline mb-3">
                                            {{-- <label for="email" class="form-label">{{ __('Email Address') }}</label> --}}
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email Address">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                          </div>
                                          <div class="col-md-6 input-group input-group-outline mb-3">
                                            {{-- <label for="mobile" class="form-label">{{ __('Mobile Number') }}</label> --}}
                                           <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required placeholder="Mobile Number">
                                            @error('mobile')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                          </div>
                                          <div class="col-md-6 input-group input-group-outline mb-3">
                                            {{-- <label for="flat_no" class="form-label">{{ __('Flat No.') }}</label> --}}
                                            <input id="flat_no" type="text" class="form-control @error('flat_no') is-invalid @enderror" name="flat_no" value="{{ old('flat_no') }}" required placeholder="Flat No.">
                                            @error('flat_no')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                          </div>
                                          <div class="col-md-6 input-group input-group-outline mb-3">
                                            {{-- <label for="city" class="form-label">{{ __('City') }}</label> --}}
                                            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required placeholder="City">
                                            @error('city')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                          </div>
                                          <div class="col-md-6 input-group input-group-outline mb-3">
                                            {{-- <label for="username" class="form-label">{{ __('Username') }}</label> --}}
                                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required placeholder="Username">
                                            @error('username')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                          </div>
                                          <div class="col-md-6 input-group input-group-outline mb-3">
                                            {{-- <label for="password" class="form-label">{{ __('Password') }}</label> --}}
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password">
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                          </div>
                                          <div class="col-md-6 input-group input-group-outline mb-3">
                                            {{-- <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label> --}}
                                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                          </div>
                                          <div class="text-center col-lg-2 col-md-8 col-12 mx-auto">
                                            <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign in</button>
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