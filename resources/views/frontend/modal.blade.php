<!-- Modal -->
<div class="modal fade" id="trackDetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content" style="border-radius: 20px; border: 2px solid #ff6347;">
            <div class="modal-header" style="border-bottom: 2px solid #ff6347;">
                <h5 class="modal-title w-100 text-center" style="color: #ff6347; font-weight: bold;">Tracking Details
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mt-4">

                    <div class="row mt-4">
                        <div class="col-6">
                            <p class="mb-1"><strong>From :</strong> <span id="country_from"
                                    style="color: #ff6347;">China</span></p>
                            <p class="mb-1"><strong>Lot:</strong> <span id="lot_number"
                                    style="color: #ff6347;">A101</span></p>
                            <p class="mb-1"><strong>Line:</strong> <span id="shipping_line"
                                    style="color: #ff6347;">Air
                                    Shipping</span></p>
                        </div>
                        <div class="col-6">
                            <p class="mb-1"><strong>To :</strong> <span id="country_to"
                                    style="color: #ff6347;">Bangladesh</span></p>
                            <p class="mb-1"><strong>Type:</strong> <span id="shipping_method"
                                    style="color: #ff6347;">Air
                                    Shipping</span></p>
                            <p class="mb-1"><strong>Receving Date:</strong> <span id="delivered_date"
                                    style="color: #ff6347;">10/12/24</span></p>
                        </div>

                        <hr class="w-100 mt-4" style="border-bottom: 2px solid #ff6347;">
                    </div>

                    <div class="progress-container">
                        <div class="row mb-3">


                            <ul class="progress-list">
                                <li class="progress-item active ">
                                    <div class="progress-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M22 21V7l-2-2H4L2 7v14h2v-9h16v9h2zm-4 0h-2v-4h2v4zm-8-2h2v2h-2v-2zm4 0h2v2h-2v-2zm4-14H6V3h12v2z"/>
                                        </svg>
                                    </div>
                                    <div class="progress-content">
                                        <h3>Abroad Warehouse</h3>
                                        <p id="warehouse_status">Package received at international warehouse</p>
                                    </div>
                                </li>
                                <li class="progress-item active ">
                                    <div class="progress-circle text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5s1.5.67 1.5 1.5s-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1.5 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5s1.5.67 1.5 1.5s-.67 1.5-1.5 1.5z" />
                                        </svg>
                                    </div>
                                    <div class="progress-content">
                                        <h3>Ready to Ship</h3>
                                        <p id="ship_status">Your package has been processed and will be with our
                                            delivery partner soon</p>
                                    </div>
                                </li>
                                <li class="progress-item ">
                                    <div class="progress-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M4 15h2v3h12v-3h2v3c0 1.1-.9 2-2 2H6c-1.1 0-2-.9-2-2m4.5-2.75L10.25 14l2.25-3l2.25 3l1.75-2.25L18 14v-4c0-1.1-.9-2-2-2H6c-1.1 0-2 .9-2 2v4l1.5-2.75L8.5 12.25Z" />
                                        </svg>
                                    </div>
                                    <div class="progress-content">
                                        <h3>Abroad Customs</h3>
                                        <p id="abroad_customs_status">Your package has been processed and will be with
                                            our delivery partner soon</p>
                                    </div>
                                </li>
                                <li class="progress-item ">
                                    <div class="progress-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1l3.5 1v-1.5L13 19v-5.5l8 2.5z" />
                                        </svg>
                                    </div>
                                    <div class="progress-content">
                                        <h3>Ready to Fly</h3>
                                        <p id="ready_to_fly_status">Your package has been processed and will be with our
                                            delivery partner soon</p>
                                    </div>
                                </li>
                                <li class="progress-item ">
                                    <div class="progress-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M4 15h2v3h12v-3h2v3c0 1.1-.9 2-2 2H6c-1.1 0-2-.9-2-2m4.5-2.75L10.25 14l2.25-3l2.25 3l1.75-2.25L18 14v-4c0-1.1-.9-2-2-2H6c-1.1 0-2 .9-2 2v4l1.5-2.75L8.5 12.25Z" />
                                        </svg>
                                    </div>
                                    <div class="progress-content">
                                        <h3>Bangladesh Customs</h3>
                                        <p id="bd_customs_status">Your package has been processed and will be with our
                                            delivery partner soon</p>
                                    </div>
                                </li>
                                <li class="progress-item ">
                                    <div class="progress-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5s1.5.67 1.5 1.5s-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1.5 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5s1.5.67 1.5 1.5s-.67 1.5-1.5 1.5z" />
                                        </svg>
                                    </div>
                                    <div class="progress-content">
                                        <h3>Bangladesh Warehouse</h3>
                                        <p id="bd_warehouse_status">Your package has been processed and will be with our
                                            delivery partner soon</p>
                                    </div>
                                </li>
                                <li class="progress-item">
                                    <div class="progress-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5l1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                        </svg>
                                    </div>
                                    <div class="progress-content">
                                        <h3>Delivered</h3>
                                        <p id="delivered_status">Your package has been processed and will be with our
                                            delivery partner soon</p>
                                    </div>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" media="print"
    onload="this.media='all'">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>
<script src="https://momentjs.com/downloads/moment.js"></script>
<script>
    $(document).ready(function() {
        var trackDetailsModal = new bootstrap.Modal(document.getElementById('trackDetails'));
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "5000"
        };

        function handleTrackAction(e) {
            e.preventDefault();
            var trackingNumber = $('#tracking_number').val();
            if (!trackingNumber) {
                toastr.warning('Please enter a tracking number');
                return;
            }

            function updateTrackingDetails(response) {
                $('#country_from').text(response.lot.country_from.name);
                $('#country_to').text(response.lot.country_to.name);
                $('#shipping_line').text(response.lot.shipping_line);
                $('#shipping_method').text(response.lot.shipping_method);
                $('#lot_number').text(response.lot.lot_number);
                $('#delivered_date').text(response.delivered_date);

                updateProgressItems(response.lot);
            }

            function updateProgressItems(lotStatus) {
                $('.progress-item').removeClass('active');

                var abroad_warehouse_at = lotStatus.abroad_warehouse_at;
                var ready_for_ship_at = lotStatus.ready_for_ship_at;
                var abroad_customs_at = lotStatus.abroad_customs_at;
                var ready_to_fly_at = lotStatus.ready_to_fly_at;
                var bangladesh_customs_at = lotStatus.bangladesh_customs_at;
                var bangladesh_warehouse_at = lotStatus.bangladesh_warehouse_at;
                var delivered_at = lotStatus.delivered_at;

                if (abroad_warehouse_at != null) {
                    $('.progress-item:eq(0)').addClass('active');
                    $('#warehouse_status').text('Your package is in the abroad warehouse');
                } else {
                    $('#warehouse_status').text('Pending');
                }

                if (ready_for_ship_at != null) {
                    $('.progress-item:eq(1)').addClass('active');
                    $('#ship_status').text('Your package is ready to ship');
                } else {
                    $('#ship_status').text('Pending');
                }

                if (abroad_customs_at != null) {
                    $('.progress-item:eq(2)').addClass('active');
                    $('#abroad_customs_status').text('Your package is at abroad customs');
                } else {
                    $('#abroad_customs_status').text('Pending');
                }

                if (ready_to_fly_at != null) {
                    $('.progress-item:eq(3)').addClass('active');
                    $('#ready_to_fly_status').text('Your package is ready to fly');
                } else {
                    $('#ready_to_fly_status').text('Pending');
                }

                if (bangladesh_customs_at != null) {
                    $('.progress-item:eq(4)').addClass('active');
                    $('#bd_customs_status').text('Your package is at Bangladesh customs');
                } else {
                    $('#bd_customs_status').text('Pending');
                }
                if (bangladesh_warehouse_at != null) {
                    $('.progress-item:eq(5)').addClass('active');
                    $('#bd_warehouse_status').text('Your package is at Bangladesh warehouse');
                } else {
                    $('#bd_warehouse_status').text('Pending');
                }

                if (delivered_at != null) {
                    $('.progress-item:eq(6)').addClass('active');
                    $('#delivered_status').text('Your package has been delivered');
                } else {
                    $('#delivered_status').text('Pending');
                }
            }
            $.ajax({
                url: '/api/tracking/' + trackingNumber,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.data) {
                        toastr.success('Tracking details found');
                        updateTrackingDetails(response.data);
                        trackDetailsModal.show();
                    } else {
                        toastr.error('No tracking details found for this number.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching tracking details:", error);
                    toastr.error('Error fetching tracking details. Please try again.');
                }
            });
        }

        $('#trackButton').on('click', handleTrackAction);
        $('#tracking_number').on('keydown', function(e) {
            if (e.key === 'Enter') {
                handleTrackAction(e);
            }
        });
    });
</script>

