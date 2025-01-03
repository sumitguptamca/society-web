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
                            <h6 class="text-white text-capitalize ps-3">Add Ticket</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="container my-auto">
                                <div class="row">
                                  <div class="col-lg-12 col-md-8 col-12 mx-auto">
                                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                                     
                                      <div class="card-body">
                        
                                      <div style="text-align:center"><h3>Add Ticket</h3></div>
                                      <form action="{{ route('client.renovation.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="input-group input-group-outline my-3">
                                              <select id="dropdown" name="request_name" class="form-control @error('request_name') is-invalid @enderror">
                                                <option value="">Select Request</option>
                                                <option value="Miner Work">Miner Work</option>
                                                <option value="Mejor Work">Mejor Work</option>
                                            </select>
                                            </div>
                                            @error('request_name')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                          </div>
                                          <div class="col-md-6">
                                           <div class="input-group input-group-outline my-3" id="input-box">
                                              <input type="number" class="form-control @error('phone') is-invalid @enderror" placeholder="Mobile No." name="phone">
                                            </div>
                                            @error('phone')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="input-group input-group-outline my-3" id="textareainput-box">
                                              <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Note" name="description"></textarea>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                            <div class="text-center col-lg-2 col-md-8 col-12 mx-auto">
                                                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Add</button>
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