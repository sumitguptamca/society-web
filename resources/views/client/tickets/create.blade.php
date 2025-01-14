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
                                      <form action="{{ route('client.tickets.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="input-group input-group-outline my-3">
                                              <select id="dropdown" name="ticket_name" class="form-control @error('ticket_name') is-invalid @enderror">
                                                <option value="0">Select Ticket</option>
                                                <option value="1">For Complaint Raise</option>
                                                <option value="2">Update Owner Detail</option>
                                                <option value="3">Update Mobile No.</option>
                                                <option value="4">Update Email</option>
                                            </select>
                                            </div>
                                            @error('ticket_name')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                          </div>
                                          <div class="col-md-6">
                                           <div class="input-group input-group-outline my-3" style="display: none;" id="input-box">
                                              <input type="number" class="form-control @error('phone') is-invalid @enderror" placeholder="Mobile No." name="phone">
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div  id="emailinput-box" class="input-group input-group-outline my-3" style="display: none;">
                                              <input id="inputField" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder=" Enter email">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="input-group input-group-outline my-3" style="display: none;" id="textareainput-box">
                                              <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Note" name="description"></textarea>
                                            </div>
                                          </div>
                                          {{-- <div class="col-md-6">
                                            <div  id="emailinput-box" class="input-group input-group-outline my-3" style="display: none;">
                                              <input id="inputField" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder=" Enter email">
                                            </div>
                                          </div> --}}
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
<script>
    // JavaScript to show input box based on dropdown selection
    $(document).ready(function() {
        $('#dropdown').change(function() {
            var selectedValue = $(this).val();
            $('#input-box').hide();
            $('#textareainput-box').hide();
            $('#emailinput-box').hide();
            if(selectedValue == '1') {
                $('#input-box').show();
                $('#textareainput-box').show();
                // $('#emailinput-box').show();
            }
            else if(selectedValue == '2'){
              $('#input-box').show();
              $('#emailinput-box').show();
            }
            else if(selectedValue == '3'){
              $('#input-box').show();
            }
            else if(selectedValue == '4'){
              $('#emailinput-box').show();
            }
        });
    });
    // document.getElementById('dropdown').addEventListener('change', function() {
    //     var dropdownValue = this.value;
    //     var inputField = document.getElementById('inputField');
    //     if (dropdownValue == '1') {
    //         inputField.type = 'text';  // Text input
    //         inputField.placeholder = 'Enter text for Option 1';
    //     } else if (dropdownValue == '2') {
    //         inputField.type = 'number';  // Number input
    //         inputField.placeholder = 'Enter a number for Option 2';
    //     } else if (dropdownValue == '3') {
    //         inputField.type = 'email';  // Email input
    //         inputField.placeholder = 'Enter Mobile no.';
    //     }else if (dropdownValue == '4') {
    //         inputField.type = 'email';  // Email input
    //         inputField.placeholder = 'Enter Mobile no.';
    //     }
    //      else {
    //         inputField.type = 'text';  // Default to text input
    //         inputField.placeholder = 'Please select an option';
    //     }
    // });
</script>
@endpush