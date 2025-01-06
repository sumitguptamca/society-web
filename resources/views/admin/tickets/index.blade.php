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
                            <h6 class="text-white text-capitalize ps-3">Tickets</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2 mx-3 z-index-2">
                        <div class="table-responsive p-0 tableflow">
                            <table class="table align-items-center data-table mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Sr. No.</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Ticket No.</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Ticket Name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Added By</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Flat No.</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Description</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Created Date</th>
                                        <th class="text-secondary opacity-7">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@push('script')
    <script>
        $(document).on('click', '.deleteTicket', function() {
            var id = $(this).data('id');
            swal.fire({
                title: "Are you sure you want to delete this?",
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel please!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $('.form_' + id).submit(); // submitting the form when user press Yes
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });

        });

        $(function() {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.tickets.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'ticket_no',
                        name: 'ticket_no'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'flateowner_name',
                        name: 'flateowner_name'
                    },
                    {
                        data: 'flat_no',
                        name: 'flat_no'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',render: function(data, type, row) {
                            if (data) {
                            let date = new Date(data);
                            let day = String(date.getDate()).padStart(2, '0'); // Add leading zero to the day
                            let month = String(date.getMonth() + 1).padStart(2, '0'); // Months are 0-based
                            let year = date.getFullYear();
                            return `${day}-${month}-${year}`; // Format as dd-mm-yyyy
                        }
                        return ''; // Return empty string if no data
                       }
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
                language: {
                    paginate: {
                        previous: 'Pre', // Customize pagination text here
                        next: 'Next' // You can also change "Next" text if needed
                    }
                },
                initComplete: function(settings, json) {
                    // $("tfoot").next().hide();
                    $(".data-table").wrap("<div style='overflow:auto; position:relative;'></div>");
                },
            });

            // Handle the "Update Status" button click
            $('.data-table').on('click', '.updateStatusBtn', function() {
                var ticketId = $(this).data('id');
                var currentStatus = $('.ticket_status_'+ticketId).val();
              
                    $.ajax({
                        url: '{{ route('admin.tickets.updateStatus') }}', // Your update status route
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: ticketId,
                            status: currentStatus
                        },
                        success: function(response) {
                            if (response.success) {
                                // Reload DataTable after update
                                toastr.success(response.message);
                                table.ajax.reload();
                            } else {
                                toastr.error(response.message); // Show error message
                            }
                        },
                        error: function(xhr, status, error) {
                            // Default message if no response is provided
                                let errorMessage = 'An unexpected error occurred. Please try again later.';

                            // Check if the server sent a custom error message
                            if (xhr.responseJSON && xhr.responseJSON.message) {
                                errorMessage = xhr.responseJSON.message; // Extract custom message from server response
                            } else if (xhr.responseText) {
                                errorMessage = xhr.responseText; // Use raw response text as fallback
                            }
                            // Display the error message
                            // alert(`Error: ${errorMessage} (HTTP Status: ${xhr.status})`);
                            toastr.error(`${errorMessage}`);
                            // alert(`${errorMessage}`);
                        }
                    });
            });

        });
    </script>
@endpush
