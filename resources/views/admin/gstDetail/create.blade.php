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
                            <h6 class="text-white text-capitalize ps-3">Add GST Detail</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="container my-auto">
                                <div class="row">
                                  <div class="col-lg-12 col-md-8 col-12 mx-auto">
                                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                                     
                                      <div class="card-body">
                        
                                      <div style="text-align:center"><h3>Add GST Detail</h3></div>
                                      <form method="POST" action="{{ route('admin.gst.store') }}">
                                        @csrf      
                                         <div class="input-group input-group-outline my-3">
                                          <input type="text" id="gstName" name="gstName" placeholder="Enter GST Name" class="form-control @error('gstName') is-invalid @enderror">
                                            @error('gstName')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                          </div>
                                          <div class="col-md-6 input-group input-group-outline mb-3">
                                            <input type="number" id="gstPercentage" name="gstPercentage" required min="0" max="100" step="0.01" placeholder="Enter GST %" class="form-control @error('gstPercentage') is-invalid @enderror">
                                            @error('gstPercentage')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                          </div>
                                          <div class="col-md-6 input-group input-group-outline mb-3">
                                            <textarea id="gst_detail" name="gst_detail" placeholder="GST Details" class="form-control @error('gst_detail') is-invalid @enderror"></textarea>
                                            @error('gst_detail')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                          </div>
                                          <div class="text-center col-lg-2 col-md-8 col-12 mx-auto">
                                            <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Add</button>
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