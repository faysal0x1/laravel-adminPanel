@extends('layouts.admin')

@section('title', 'Update Blog')

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
                <li class="breadcrumb-item"><a href="{{route('admin.blogs')}}">Blogs View</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Edit Blog</a>
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
            <h5 class="card-header-text">Edit Blog</h5>
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
                <form action="/admin/blogs/{{$blog->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="name" class="col-xs-2 col-form-label form-control-label">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="name" name="name" value="{{$blog->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="photo" class="col-xs-2 col-form-label form-control-label">Photo</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="photo" name="photo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blog_category_id"
                            class="col-xs-2 col-form-label form-control-label">Category</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="blog_category_id" name="blog_category_id">
                                <option value="" disabled>Select category</option>
                                @foreach ($categories as $category )
                                @if ($category->id == $blog->blog_category_id)
                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                @else
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="created_by" class="col-xs-2 col-form-label form-control-label">Author</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="created_by" name="created_by">
                                <option value="1" selected>Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="desc" class="col-xs-2 col-form-label form-control-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="desc" name="desc" rows="5">{{$blog->desc}}</textarea>
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
