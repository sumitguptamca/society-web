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
                            <h6 class="text-white text-capitalize ps-3">Add Notice</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="container my-auto">
                                <div class="row">
                                  <div class="col-lg-12 col-md-8 col-12 mx-auto">
                                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                                     
                                      <div class="card-body">
                        
                                      <div style="text-align:center"><h3>Add Notice</h3></div>
                                   
                                      
                                      <form method="POST" action="{{ route('admin.notice.store') }}">
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}"> 
                                        @csrf    
                                        
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="input-group input-group-outline my-3">
                                              <input type="date" id="notice_date" name="notice_date" value="{{ old('notice_date') }}"  class="form-control @error('notice_date') is-invalid @enderror">
                                                @error('notice_date')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="input-group input-group-outline my-3">
                                              <input type="text" id="notice_title" name="notice_title" value="{{ old('notice_title') }}"  placeholder="Notice title" class="form-control @error('notice_title') is-invalid @enderror">
                                              @error('notice_title')
                                                  <div class="invalid-feedback">{{ $message }}</div>
                                              @enderror
                                            </div>
                                          </div>
                                        </div> 
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="input-group input-group-outline my-3">
                                              <textarea id="notice_description" name="notice_description" placeholder="Notice description" class="form-control @error('notice_description') is-invalid @enderror">{{ old('notice_description') }}</textarea>
                                              @error('notice_description')
                                                  <div class="invalid-feedback">{{ $message }}</div>
                                              @enderror
                                            </div>
                                          </div>
                                        </div>


                                          <div class="text-center col-lg-2 col-md-8 col-12 mx-auto">
                                            <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Add</button>
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