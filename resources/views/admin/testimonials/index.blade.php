@extends('layouts.admin')

@section('title', 'Testimonial Management')

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
                <li class="breadcrumb-item"><a href="{{route('admin.categories')}}">Testimonial View</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Testimonials List</a>
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
                <h5 class="card-header-text">Testimonial List</h5>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-sm-12 table-responsive">
                        <table id="blogListTable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Rating</th>
                                    <th>Desciption</th>
                                    <th>Position</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $testimonial)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$testimonial->name}}</td>
                                    <td>{{$testimonial->rating}}</td>
                                    <td>{{$testimonial->desc}}</td>
                                    <td>{{$testimonial->position}}</td>
                                    <td>
                                        <!-- <a href="{{ route('admin.testimonialShow', $testimonial->id) }}" class="btn btn-success">View</a> -->
                                        <a href="{{ route('admin.testimonialEdit', $testimonial->id) }}"
                                            class="btn btn-success">Edit</a>
                                        <form action="{{ route('admin.testimonialDestroy', $testimonial->id) }}"
                                            method="POST" class="delete-form" style="display: inline;">
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



<script>
    $(document).ready(function() {
        $('#blogListTable').DataTable({
            "pageLength": 5,
            "lengthMenu": [5, 10, 25, 50, 100]
        });
    });
    function viewData(id){
        document.getElementById('nameData').innerHTML = document.getElementById('n'+id).innerHTML;
        document.getElementById('positionData').innerHTML = document.getElementById('p'+id).innerHTML;
        document.getElementById('ratingData').innerHTML = document.getElementById('r'+id).innerHTML;
        document.getElementById('descData').innerHTML = document.getElementById('d'+id).innerHTML;
    }
</script>
@include('admin.components.sweetDelAlert')
@include('admin.components.toastrAlert')

@endsection
