@extends('layouts.admin')

@section('title', 'Patient List')


@section('content')

    <x-breadcumb title="Patient List" />

    <div class="table-responsive">

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>phone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($doctors as $key=> $item)
                                <tr>
                                    <td>{{ ++$key }}</td>

                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->department->name }}</td>

                                    <td>{{ $item->user->phone }}</td>
                                    <td>{{ $item->user->email }}</td>
                                    <td>
                                        <a href="{{ route('admin.doctor.edit', $item->id) }}" class="btn btn-success">Edit</a>

                                        <form method="post" action="{{ route('admin.doctor.destroy', $item->id) }}"
                                            class="delete-form" style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger delete-button"
                                                data-id="{{ $item->id }}">
                                                Delete
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No data found</td>
                                </tr>
                            @endforelse


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
            $('#example').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>
@endpush
