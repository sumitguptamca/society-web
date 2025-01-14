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
                            <h6 class="text-white text-capitalize ps-3">Update Flat Owner</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="container my-auto">
                                <div class="row">
                                  <div class="col-lg-12 col-md-8 col-12 mx-auto">
                                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                                     
                                      <div class="card-body">
                        
                                      <div style="text-align:center"><h3>Update Flat Owner</h3></div>
                                   
                                      
                                      <form method="POST" action="{{ route('admin.flatowner.update', $flateOwner->id) }}" enctype="multipart/form-data">
                                        @csrf     
                                        @method('PUT') 
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="input-group input-group-outline my-3">
                                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $flateOwner->name) }}" placeholder="Full Name">
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="input-group input-group-outline my-3">
                                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $flateOwner->email) }}" placeholder="Email Address">
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                          </div>
                                        </div> 


                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="input-group input-group-outline my-3">
                                              <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile', $flateOwner->mobile) }}" placeholder="Mobile Number">
                                                @error('mobile')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="input-group input-group-outline my-3">
                                              <input id="flat_no" type="text" class="form-control @error('flat_no') is-invalid @enderror" name="flat_no" value="{{ old('flat_no', $flateOwner->flat_no) }}" placeholder="Flat No.">
                                                @error('flat_no')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                          </div>
                                        </div> 

                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="input-group input-group-outline my-3">
                                              <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city', $flateOwner->city) }}" placeholder="City">
                                             @error('city')
                                                  <div class="invalid-feedback">{{ $message }}</div>
                                              @enderror
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="input-group input-group-outline my-3">
                                              <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username', $flateOwner->username) }}" placeholder="Username">
                                              @error('username')
                                              <div class="invalid-feedback">{{ $message }}</div>
                                              @enderror
                                            </div>
                                          </div>
                                        </div> 
                                          
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="input-group input-group-outline my-3">
                                              <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" accept="image/*">
                                              @error('file')
                                              <div class="invalid-feedback">{{ $message }}</div>
                                             @enderror
                                             <span><img src="{{ asset('storage/' . $flateOwner->profile_image) }}" alt="Profile Picture" width="100"></div>
                                            </div>
                                          </div>
                                          
                                        </div> 
                                         
                                          <div class="text-center col-lg-2 col-md-8 col-12 mx-auto">
                                            <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Update</button>
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