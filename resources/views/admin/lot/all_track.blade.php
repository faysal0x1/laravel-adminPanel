@extends('layouts.admin')

@section('title', 'Tracking List')


@section('content')

    <x-breadcumb title="Tracking List" />

    <div class="table-responsive py-3">
        <a href="{{ route('lot.tracking', $data->id) }}" class="btn btn-primary">Add Tracking</a>


    </div>

    <div class="table-responsive">

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Lot Number</th>
                                <th>Tracking Number</th>
                                <th>Shipping Method</th>
                                <th>Cartoon Number</th>
                                <th>Total Cartoon</th>
                                <th>Goods Category</th>
                                <th>Weight</th>
                                <th>Product Quality</th>
                                <th>Width</th>
                                <th>Length</th>
                                <th>CBM</th>
                                <th>Height</th>
                                <th>Packing Fee</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data->lotDetail as $lotDetail)
                                @php
                                    $trackingDetails = $lotDetail->trackingDetail;
                                    $countTrackingDetail = $trackingDetails->count();
                                @endphp
                                @foreach ($trackingDetails as $key => $trackingDetail)
                                    <tr data-id="{{ $lotDetail->id }}">
                                        <td>{{ $loop->parent->iteration }}</td>
                                        <td>{{ $data->lot_number }}</td>
                                        <td>{{ $lotDetail->tracking_number }}</td>
                                        <td>{{ $data->shipping_method }}</td>
                                        <td>{{ $trackingDetail->cartoon_number }}</td>
                                        <td>{{ $lotDetail->total_cartoon }}</td>
                                        <td>{{ $trackingDetail->goods_category }}</td>
                                        <td>{{ $trackingDetail->weight }}</td>
                                        <td>{{ $trackingDetail->product_quality }}</td>
                                        <td>{{ $trackingDetail->width }}</td>
                                        <td>{{ $trackingDetail->length }}</td>
                                        <td>{{ $trackingDetail->cbm }}</td>
                                        <td>{{ $trackingDetail->height }}</td>
                                        <td>{{ $trackingDetail->packing_fee }}</td>
                                        <td>{{ $lotDetail->status }}</td>

                                        @if ($loop->last)
                                            <td>
                                                <a href="{{ route('lot.add.product', $lotDetail->id) }}"
                                                    class="btn btn-primary">
                                                    Add Product
                                                </a>
                                            </td>
                                        @else
                                        <td>
                                        </td>
                                        @endif
                                    </tr>
                                @endforeach
                            @endforeach

                            {{-- @forelse ($data->lotDetail as $key=> $item)
                        <tr data-id="{{ $item->id }}">
                            <td>{{ ++$key }}</td>

                            <td>{{ $data->lot_number }}</td>
                            <td>{{ $item->tracking_number }}</td>
                            <td>{{ $data->shipping_method }}</td>
                            <td>{{ $item['total_cartoon'] }}</td>

                            <td>{{ $item->status }}</td>

                            <td>

                                <a href="{{ route('lot.add.product', $item->id) }}" class="btn btn-primary">
                                    Add Product
                                </a>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No data found</td>
                        </tr>
                    @endforelse --}}
                        </tbody>
                    </table>
                    <button id="show-selected-ids" class="btn btn-info mt-3">Process Selected Items</button>
                </div>
            </div>
        </div>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="statusModalLabel">Update Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Selected IDs: <span id="selected-ids"></span></p>
                    <form id="statusForm">
                        @csrf
                        <input type="hidden" name="ids" id="ids-input">
                        <div class="mb-3">
                            <label for="status" class="form-label">Choose Action:</label>
                            <select class="form-select" id="status" name="status">
                                <option value="active">Active</option>
                                <option value="off_load">Offload</option>
                                <option value="returned">Returned</option>
                                <option value="offload_and_send">Offload and Send to Another Lot</option>
                            </select>
                        </div>
                        <div id="newLotSection" style="display:none;">
                            <div class="mb-3">
                                <label for="new_lot" class="form-label">New Lot Number:</label>
                                <input type="text" class="form-control" id="new_lot" name="new_lot">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="updateStatus">Update</button>
                </div>
            </div>
        </div>
    </div>

    <!-- New Lot Selection Modal -->
    <div class="modal fade" id="lotSelectionModal" tabindex="-1" aria-labelledby="lotSelectionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lotSelectionModalLabel">Select Destination Lot</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table id="lotTable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Lot Number</th>
                                <th>Shipping Method</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Lot data will be populated here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('style')
    <link href="{{ asset('backend/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <style>
        #example2 tbody tr.selected {
            background-color: #b0bed9;
        }
    </style>
@endpush

@push('script')
    <script src="{{ asset('backend/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>

    @push('script')
        <script src="{{ asset('backend/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>

        <script>
            $(document).ready(function() {
                var table = $('#example2').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf', 'print']
                });
                table.buttons().container()
                    .appendTo('#example2_wrapper .col-md-6:eq(0)');

                // Lot Section Table

                // });

                // Replace the DataTables initialization with this:
                function fetchLots() {
                    $.ajax({
                        url: '{{ route('get.lots') }}',
                        method: 'GET',
                        success: function(response) {
                            var tableBody = $('#lotTable tbody');
                            tableBody.empty();

                            response.forEach(function(lot) {
                                var row = '<tr>' +
                                    '<td>' + lot.lot_number + '</td>' +
                                    '<td>' + lot.shipping_method + '</td>' +
                                    '<td><button class="btn btn-sm btn-primary select-lot" data-id="' +
                                    lot.id + '">Select</button></td>' +
                                    '</tr>';
                                tableBody.append(row);
                            });
                        },
                        error: function(xhr) {
                            Toastify({
                                text: 'Error: ' + xhr.responseText,
                                duration: 3000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                backgroundColor: "#ff6347",
                            }).showToast();
                        }
                    });
                }

                // Row selection
                $('#example2 tbody').on('click', 'tr', function() {
                    $(this).toggleClass('selected');
                    $(this).find('.row-checkbox').prop('checked', $(this).hasClass('selected'));
                });

                // Select all checkbox
                $('#select-all').on('click', function() {
                    var rows = table.rows().nodes();
                    $('input[type="checkbox"]', rows).prop('checked', this.checked);
                    $(rows).toggleClass('selected', this.checked);
                });

                // Checkbox click shouldn't trigger row selection
                $('#example2 tbody').on('click', 'input[type="checkbox"]', function(e) {
                    e.stopPropagation();
                });

                // Show selected row IDs
                $('#show-selected-ids').on('click', function() {
                    var selectedIds = table.rows('.selected').nodes().map(function(row) {
                        return $(row).data('id');
                    }).toArray();

                    if (selectedIds.length > 0) {
                        $('#selected-ids-display').html('Selected IDs: ' + selectedIds.join(', '));
                    } else {
                        $('#selected-ids-display').html('No rows selected');
                    }
                });

                // Show modal with selected row IDs

                // Show status modal with selected row IDs
                $('#show-selected-ids').on('click', function() {
                    var selectedIds = table.rows('.selected').nodes().map(function(row) {
                        return $(row).data('id');
                    }).toArray();

                    if (selectedIds.length > 0) {
                        $('#selected-ids').text(selectedIds.join(', '));
                        $('#ids-input').val(selectedIds.join(','));
                        $('#statusModal').modal('show');
                    } else {

                        Toastify({
                            text: 'No rows selected',
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "#4CAF50",
                        }).showToast();
                    }
                });

                // Handle status change
                $('#status').on('change', function() {
                    if ($(this).val() === 'offload_and_send') {
                        $('#statusModal').modal('hide');
                        $('#lotSelectionModal').modal('show');
                        fetchLots();
                    }
                });

                // Handle lot selection
                $('#lotTable').on('click', '.select-lot', function() {
                    var lotId = $(this).data('id');
                    var lotNumber = $(this).closest('tr').find('td:first').text();

                    var formData = new FormData($('#statusForm')[0]);
                    formData.append('status', 'offload_and_send');
                    formData.append('new_lot_id', lotId);

                    $.ajax({
                        url: '{{ route('update.lot.status') }}',
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            Toastify({
                                text: response.message,
                                duration: 3000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                backgroundColor: "#4CAF50",
                            }).showToast();

                            $('#lotSelectionModal').modal('hide');
                            location.reload();
                        },
                        error: function(xhr) {
                            Toastify({
                                text: 'Error: ' + xhr.responseText,
                                duration: 3000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                backgroundColor: "#ff6347",
                            }).showToast();
                        }
                    });
                });

                // Handle other status updates
                $('#updateStatus').on('click', function() {
                    var status = $('#status').val();
                    if (status !== 'offload_and_send') {
                        $.ajax({
                            url: '{{ route('update.lot.status') }}',
                            method: 'POST',
                            data: $('#statusForm').serialize(),
                            success: function(response) {
                                Toastify({
                                    text: response.message,
                                    duration: 3000,
                                    close: true,
                                    gravity: "top",
                                    position: "right",
                                    backgroundColor: "#4CAF50",
                                }).showToast();

                                $('#statusModal').modal('hide');
                                // Reload the table or update the affected rows
                                location.reload();
                            },
                            error: function(xhr) {
                                Toastify({
                                    text: 'Error: ' + xhr.responseText,
                                    duration: 3000,
                                    close: true,
                                    gravity: "top",
                                    position: "right",
                                    backgroundColor: "#ff6347",
                                }).showToast();
                            }
                        });
                    }
                });
            });
        </script>
    @endpush
@endpush
