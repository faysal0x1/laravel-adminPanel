@extends('layouts.admin')

@section('title', 'Lot List')

@section('content')

<x-breadcumb title="Lot List" />

<div class="table-responsive">
    <div class="card">
        <div class="card-body">
            <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Lot Number</th>
                        <th>Shipping Line</th>
                        <th>Shipping Method</th>
                        <th>Country</th>
                        @permission('can_update_lot_status')
                        <th>Update Lot Status</th>
                        @endpermission
                        @permission('can_update_status')
                        <th>Status</th>
                        @endpermission
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $key => $item)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $item->lot_number }}</td>
                        <td>{{ $item->shipping_line }}</td>
                        <td>{{ $item->shipping_method }}</td>
                        <td>
                            From : {{ $item->countryFrom['name'] }}
                            <br>
                            To : {{ $item->countryTo['name'] }}
                        </td>
                        @permission('can_update_lot_status')
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" onclick="openStatusModal({{ $item->id }})">
                                Update Status
                            </button>
                        </td>
                        @endpermission
                        @permission('can_update_status')
                        <td>
                            <form id="statusForm-{{ $item->id }}" action="{{ route('lot.change.status', $item->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-{{ $item->status == 1 ? 'success' : 'danger' }}">
                                    {{ $item->status == 1 ? 'Active' : 'Inactive' }}
                                </button>
                            </form>
                        </td>
                        @endpermission
                        <td>
                            @permission('can_view_track')
                            <a href="{{ route('lot.view.tracking', $item->id) }}" class="btn btn-primary">Tracking</a>
                            @endpermission
                            @permission('can_add_track')
                            <a href="{{ route('lot.tracking', $item->id) }}" class="btn btn-primary">Add Tracking</a>
                            @endpermission
                            @permission('can_edit_lot')
                            <a href="{{ route('lot.edit', $item->id) }}" class="btn btn-success">Edit</a>
                            @endpermission
                            @permission('can_delete_lot')
                            <form method="post" action="{{ route('lot.destroy', $item->id) }}" class="delete-form" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger delete-button" data-id="{{ $item->id }}">Delete</button>
                            </form>
                            @endpermission
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8">No data found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Status Update Modal -->
<div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="statusModalLabel">Update Lot Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="updateStatusForm">
                    @csrf
                    <input type="hidden" id="lotId" name="lotId">
                    <div class="mb-3">
                        <label for="statusSelect" class="form-label">Select Status</label>
                        <select class="form-select wide-select" id="statusSelect" name="statuses[]" multiple>
                            @foreach(\App\Models\Lot::LOT_STATUS_SEQUENCE as $status)
                                <option value="{{ $status }}">{{ $status }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="updateLotStatus()">Update Status</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('style')
<link href="{{ asset('backend/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .select2-container--default .select2-selection--multiple {
        width: 100%;
    }
    .select2-container {
        width: 100% !important;
    }
    .wide-select + .select2-container {
        min-width: 300px; /* Adjust this value as needed */
    }
</style>
@endpush

@push('script')
<script src="{{ asset('backend/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example2').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print']
        });

        $('#statusSelect').select2({
            placeholder: "Select status(es)",
            allowClear: true
        });
    });

    function openStatusModal(lotId) {
        document.getElementById('lotId').value = lotId;
        $('#statusSelect').val(null).trigger('change');

        $.ajax({
            url: '{{ route("lot.get.statuses", ":id") }}'.replace(':id', lotId),
            type: 'GET',
            success: function(response) {
                $('#statusSelect').val(response.statuses).trigger('change');
                var modal = new bootstrap.Modal(document.getElementById('statusModal'));
                modal.show();
            },
            error: function(xhr) {
                Swal.fire('Error!', 'An error occurred while fetching lot statuses.', 'error');
            }
        });
    }

    function updateLotStatus() {
        var form = document.getElementById('updateStatusForm');
        var formData = new FormData(form);

        $.ajax({
            url: '{{ route("lot.update.status", ":id") }}'.replace(':id', formData.get('lotId')),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    Swal.fire('Updated!', response.message, 'success').then(() => {
                        location.reload();
                    });
                }
            },
            error: function(xhr) {
                Swal.fire('Error!', 'An error occurred while updating the status.', 'error');
            }
        });
    }

    $(document).ready(function() {
        $('.delete-button').on('click', function() {
            var id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).closest('form').submit();
                }
            });
        });
    });
</script>
@endpush
