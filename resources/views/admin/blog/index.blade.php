@extends('layouts.admin')

@section('title', 'All Blogs')

@section('content')

@if (session('success'))
    <div class="success" style="display: none;">{{session('success')}}</div>
@elseif(session('error'))
    <div class="error" style="display: none;">{{session('error')}}</div>
@endif

<x-breadcumb title="Alll Blogs" />


<div class="row">
    <div class="col-xl-9 mx-auto">

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Created By</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($blogs as $blog)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $blog->name }}</td>
                                <td>{{ $blog->BlogCategory->name }}</td>
                                <td>{{ $blog->User->name }}</td>
                                <td>
                                    <a href="{{ route('website.blog-view', $blog->slug) }}" class="btn btn-primary">View</a>
                                    <a href="{{ route('admin.blogEdit', $blog->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('admin.blogDestroy', $blog->id) }}" method="POST" class="delete-form" id="del{{$loop->iteration}}" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger" onclick="deleteAlert(event,`{{$loop->iteration}}`)">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7">No data found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
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
            lengthChange: false
            , buttons: ['copy', 'excel', 'pdf', 'print']
        });

        table.buttons().container()
            .appendTo('#example2_wrapper .col-md-6:eq(0)');
    });

</script>
@endpush
