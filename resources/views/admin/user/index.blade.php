@extends('layouts.admin')

@section('title', 'User List')


@section('content')

    <x-breadcumb title="User List" />

    <div class="table-responsive">

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>phone</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>



                        </tbody>

                    </table>
                </div>
            </div>
        </div>


    </div>


@endsection


@push('style')
    <link href="{{ asset('backend/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endpush

@push('script')
    <script src="{{ asset('backend/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>


    <script>
        $(document).ready(function() {

            var table = $('#example2').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'print'],
        processing: true,
        serverSide: true,
        ajax: '{{ route('user.index') }}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'phone', name: 'phone' },
            { data: 'email', name: 'email' },
            { data: 'role', name: 'role' },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action' },
        ]
    });
        });
    </script>
@endpush
