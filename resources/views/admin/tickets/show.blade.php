@extends('admin/layouts/app')
@push('style')
<style>
  .container1 {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .row {
            display: flex;
            gap: 20px;
        }
        .box {
            display: flex;
            flex-direction: column;
            flex: 1;
        }
        .box label {
            margin-bottom: 10px;
            font-weight: bold;
        }
        .box input,
        .box textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .full-width {
            flex: 1 1 100%;
        }
        /* Base styles for large screens (default) */
        .img {
            display: flex;
            flex-wrap: wrap;
            gap: 10px; /* Adds space between the images */
            /* justify-content: space-between; Centers the images */
        }

        .img img {
            width: 100%; /* Makes images responsive */
            max-width: 200px; /* Limits the maximum size of the images */
            height: auto; /* Maintains aspect ratio */
            object-fit: cover; /* Ensures images cover the container */
        }

        /* Medium screens (Tablets and small laptops) */
        @media (max-width: 768px) {
            .img img {
                max-width: 150px; /* Smaller max-width for medium screens */
            }
        }
        @media (max-width: 480px) {
            .img {
                justify-content: space-around; /* Adds space around images */
            }

            .img img {
                max-width: 120px; /* Even smaller max-width for mobile screens */
            }
        }
        @media (max-width: 360px) {
            .img img {
                max-width: 100px; /* Further reduce image size */
            }
        }

</style>
@endpush

@section('content')
<div class="container-fluid py-2">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Tickets</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2 mx-3 z-index-3">
                    <div class="table-responsive p-0 tableflow">
                        <div class="container1">
                            <!-- First Row -->
                            @php
                            if ($ticket->title == 1) {
                                $title = 'For Complaint Raise';
                            } elseif ($ticket->title == 2) {
                                $title = 'Update Owner Detail';
                            } elseif ($ticket->title == 3) {
                                $title = 'Update Mobile No.';
                            } elseif ($ticket->title == 4) {
                                $title = 'Update Email';
                            } else {
                                $title = 'N/A';
                            }
                            @endphp
                            <div class="row">
                                <div class="box">
                                    <label for="field1">Added By</label>
                                    <input type="text" value="{{$flateowner_name}}" disabled>
                                </div>
                                <div class="box">
                                    <label for="field2">Ticket No</label>
                                    <input type="text"  value="{{$ticket->ticket_no}}" disabled>
                                </div>
                            </div>
                    
                            <!-- Second Row -->
                            <div class="row">
                                <div class="box">
                                    <label for="field3">Title</label>
                                    <input type="text" id="field3" name="field3" value="{{$title}}" disabled>
                                </div>
                                <div class="box">
                                    <label for="field4">Status</label>
                                    <input type="text" id="field4" name="field4" value="{{$ticket->status}}" disabled>
                                </div>
                            </div>
                            <!-- Description Section -->
                            <div class="row">
                                <div class="box full-width">
                                    <label for="description">Description</label>
                                    <textarea id="description" name="description" rows="4" disabled>{{$ticket->description}}</textarea>
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