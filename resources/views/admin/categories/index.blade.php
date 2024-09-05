@extends('layouts.admin')

@section('title', 'Category Management')

@section('content')

<!-- Header Starts -->
<div class="row">
    <div class="col-sm-12 p-0">
        <div class="main-header" style="margin-top: 0px;">
            <h4>Table</h4>
            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <i class="icofont icofont-home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="{{route('admin.categories')}}">Categories View</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Categories List</a>
                </li>
            </ol>
        </div>
    </div>
</div>
<!-- Header end -->

<!-- Tables start -->
<!-- Row start -->
<div class="row">
    <div class="col-sm-12">
        <!-- Hover effect table starts -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-header-text">Categories List</h5>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-sm-12 table-responsive">
                        <table id="blogListTable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category name</th>
                                    <th>Slug</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->slug}}</td>
                                    <td>
                                        <a href="{{ route('admin.categoryEdit', $category->id) }}"
                                            class="btn btn-success">Edit</a>
                                        <form action="{{ route('admin.categoryDestroy', $category->id) }}" method="POST"
                                            class="delete-form" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hover effect table ends -->
    </div>
</div>
<!-- Row end -->
<!-- Tables end -->


<script>
    $(document).ready(function() {
        $('#blogListTable').DataTable({
            "pageLength": 5,
            "lengthMenu": [5, 10, 25, 50, 100]
        });
    });
</script>
@include('admin.components.sweetDelAlert')
@include('admin.components.toastrAlert')

@endsection
