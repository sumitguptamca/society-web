function deleteFunction(classBtn, deleteRoute) {
    alert('Test');
    $('.data-table').on('click', classBtn, function () {
        var brandId = $(this).data('id');
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var table = $('.data-table').DataTable();
        
        swal({
            title: "Are you sure you want to delete this?",
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            buttons: ["Cancel", "Yes, delete it!"],
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                deleteRoutes = deleteRoute.replace(':ids', brandId);
                $.ajax({
                    type: "DELETE",
                    url: deleteRoutes,
                    data: {_token: CSRF_TOKEN, _method: 'DELETE'},
                    cache: false,
                    success: function (data) {
                        table.ajax.reload(); 
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            }
        });
    });
}