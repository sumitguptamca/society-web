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
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Added By</th>
                                       <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Title</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Description</th>
                                      <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status</th>
                                          <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
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

    $(function () {
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.tickets.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex',orderable: false, searchable: false},
                {data: 'ticket_no', name: 'ticket_no'},
                {data: 'flateowner_name', name: 'flateowner_name'},
                {data: 'title', name: 'title'},
                {data: 'description', name: 'description'},
                {data: 'status', name: 'status'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            language: {
                paginate: {
                    previous: 'Pre',  // Customize pagination text here
                    next: 'Next'      // You can also change "Next" text if needed
                    }
                },
            initComplete: function(settings, json) {
                // $("tfoot").next().hide();
                $(".data-table").wrap("<div style='overflow:auto; position:relative;'></div>"); 
            },
        }); 

    });
</script>
@endpush
