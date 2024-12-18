
@if(session('success'))
<script>
    Swal.fire({
    toast: true,
    position: 'top-end',
    icon: 'success',
    title: '{{session('success')}}',
    showCloseButton: true, // Enables the close button
    showConfirmButton: false, // Hides the confirm button
    timer: 3000, // Auto-closes after 3 seconds
    timerProgressBar: true,
    customClass: {
        popup: 'custom-toast'
    },
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer);
        toast.addEventListener('mouseleave', Swal.resumeTimer);
    }
});
</script>
@endif

<!-- Display error message -->
@if(session('error'))
<script>
   Swal.fire({
    toast: true,
    position: 'top-end',
    icon: 'error',
    title: '{{session('error')}}',
    showCloseButton: true, // Enables the close button
    showConfirmButton: false, // Hides the confirm button
    timer: 3000, // Auto-closes after 3 seconds
    timerProgressBar: true,
    customClass: {
        popup: 'custom-toast-error'
    },
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer);
        toast.addEventListener('mouseleave', Swal.resumeTimer);
    }
});
</script>
@endif

<!-- Display warning message -->
@if(session('warning'))
<script>
    Swal.fire({
    toast: true,
    position: 'top-end',
    icon: 'error',
    title: '{{session('warning')}}',
    showCloseButton: true, // Enables the close button
    showConfirmButton: false, // Hides the confirm button
    timer: 3000, // Auto-closes after 3 seconds
    timerProgressBar: true,
    customClass: {
        popup: 'custom-toast-warning'
    },
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer);
        toast.addEventListener('mouseleave', Swal.resumeTimer);
    }
});
</script>
@endif

<!-- Display info message -->
@if(session('info'))
<script>
   Swal.fire({
    toast: true,
    position: 'top-end',
    icon: 'error',
    title: '{{session('info')}}',
    showCloseButton: true, // Enables the close button
    showConfirmButton: false, // Hides the confirm button
    timer: 3000, // Auto-closes after 3 seconds
    timerProgressBar: true,
    customClass: {
        popup: 'custom-toast-info'
    },
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer);
        toast.addEventListener('mouseleave', Swal.resumeTimer);
    }
});
</script>
@endif
