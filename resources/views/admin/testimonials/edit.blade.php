@extends('layouts.admin')

@section('title', 'Update Testimonial')

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
                <li class="breadcrumb-item"><a href="{{route('admin.testimonials')}}">Testimonials View</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Edit Testimonial</a>
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
            <h5 class="card-header-text">Edit Testimonial</h5>
            @if ($errors->any())
        <div class="card">
            <div class="card-header">
                <h5 class="card-header-text">Edit Testimonial</h5>
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
            <div class="card-block">
                <form action="/admin/testimonials/{{$testimonial->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="name" class="col-xs-2 col-form-label form-control-label">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="name" name="name"
                                value="{{$testimonial->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-xs-2 col-form-label form-control-label">Rating</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" id="rating" name="rating" min="0" max="5"
                                value="{{$testimonial->rating}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-xs-2 col-form-label form-control-label">Position</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="position" name="position"
                                value="{{$testimonial->position}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="desc" class="col-xs-2 col-form-label form-control-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="desc" name="desc"
                                rows="5">{{$testimonial->desc}}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
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
