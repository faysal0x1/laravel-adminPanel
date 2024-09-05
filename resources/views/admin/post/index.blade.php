@extends('layouts.admin')

@section('title', 'All Posts')

@section('content')
    @if (session('success'))
        <div class="success" style="display: none;">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="error" style="display: none;">{{ session('error') }}</div>
    @endif

    <x-breadcumb title="All Posts" />

    <div class="row">
        <div class="col-md-9 mx-auto">
            <div class="m-5">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Photo</th>
                                        <th>Description</th> {{-- New Description Column --}}
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Data is handled by Yajra DataTables --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                    ajax: '{{ route('post.index') }}',
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'photo', name: 'photo' },
                        { data: 'desc', name: 'desc' },
                        { data: 'action', name: 'action', orderable: false, searchable: false }
                    ]
                });

                table.buttons().container()
                    .appendTo('#example2_wrapper .col-md-6:eq(0)');
            });
        </script>
    @endpush
@endsection
