    // toggle status

    $(document).ready(function() {
        $('.toggle-status-button').click(function() {
            var id = $(this).data('id');
            var status = $(this).data('status');
            var form = $(this).closest('.toggle-status-form');
            var url = form.attr('action');
            var statusText = status ? 'deactivate' : 'activate';

            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to ' + statusText + ' the status?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, ' + statusText + ' it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
