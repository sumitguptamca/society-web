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
                            <h6 class="text-white text-capitalize ps-3">Update Electricity Bill</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="container my-auto">
                                <div class="row">
                                  <div class="col-lg-12 col-md-8 col-12 mx-auto">
                                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                                     
                                      <div class="card-body">
                        
                                      <div style="text-align:center"><h3>Update Electricity Bill</h3></div>
                                   
                                      
                                      <form method="POST" action="{{ route('admin.bills.electricities.update', $electricitybill->id) }}">
                                        @csrf     
                                        @method('PUT')      
                                         <div class="input-group input-group-outline my-3">
                                            {{-- <label for="name" class="form-label">{{ __('Full Name') }}</label> --}}
                                            <input id="customer_name" type="text" class="form-control @error('customer_name') is-invalid @enderror" name="customer_name" value="{{ old('customer_name', $electricitybill->customer_name) }}"  placeholder="Customer Name">
                                            @error('customer_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                          </div>
                                          <div class="col-md-6 input-group input-group-outline mb-3">
                                            <input type="text" id="address" name="address" class="form-control" value="{{ old('address', $electricitybill->address) }}" placeholder="Address">
                                          </div>
                                          <div class="col-md-6 input-group input-group-outline mb-3">
                                            <input type="text" id="meter_number" name="meter_number" class="form-control @error('meter_number') is-invalid @enderror" placeholder="Meter Number" value="{{ old('meter_number', $electricitybill->meter_number) }}">
                                            @error('meter_number')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                          </div>
                                          <div class="col-md-6 input-group input-group-outline mb-3">
                                            <input type="number" id="units_consumed" class="form-control @error('units_consumed') is-invalid @enderror" name="units_consumed" placeholder="Units Consumed" value="{{ old('units_consumed', $electricitybill->units_consumed) }}">
                                            @error('units_consumed')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                          </div>
                                          <div class="col-md-6 input-group input-group-outline mb-3">
                                            <input type="number" id="rate_per_unit" class="form-control @error('rate_per_unit') is-invalid @enderror" name="rate_per_unit" placeholder="Rate per unit  (&#8377;)" value="{{ old('rate_per_unit', $electricitybill->rate_per_unit) }}">
                                            @error('rate_per_unit')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                          </div>
                                          <div class="col-md-6 input-group input-group-outline mb-3">
                                            <input type="number" id="total_amount" name="total_amount"  readonly class="form-control" placeholder="Total Amount (&#8377;)" value="{{ old('total_amount', $electricitybill->total_amount) }}">
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

<script>
    // Calculate total amount based on units consumed and rate per unit
    document.getElementById('units_consumed').addEventListener('input', calculateTotal);
    document.getElementById('rate_per_unit').addEventListener('input', calculateTotal);

    function calculateTotal() {
        var units = document.getElementById('units_consumed').value;
        var rate = document.getElementById('rate_per_unit').value;
        
        if (units && rate) {
            var totalAmount = units * rate;
            document.getElementById('total_amount').value = totalAmount.toFixed(2);
        }
    }
</script>
@endpush