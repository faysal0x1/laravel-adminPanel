@extends('layouts.admin')

@section('title', 'Update Posts')

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
                <li class="breadcrumb-item"><a href="{{route('post.index')}}">Posts View</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('post.edit', $data->id) }}">Edit Posts</a>
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


    <div class="card" style="box-shadow: 0 0 5px black; border-radius:10px; margin: 0 20px 0 20px;">
        <div class="card-header">
            <h5 class="card-header-text">Edit Posts</h5>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <div class="card-body">
                <div class="p-4 border rounded">
                    <form class="row g-3 needs-validation" novalidate="" action="{{ route('post.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="col-md-6">
                        <label for="name" class="col-xs-2 col-form-label form-control-label">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="name" name="name" value="{{$data->name}}">
                        </div>
                    </div>

                    <div class="col-md-7">
                        <label for="photo" class="col-xs-2 col-form-label form-control-label">Photo</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="photo" name="photo">
                        </div>
                    </div>


                    <div class="col-md-12">
                        <label for="desc" class="col-xs-2 col-form-label form-control-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="desc" name="desc" rows="5">{{$data->desc}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
