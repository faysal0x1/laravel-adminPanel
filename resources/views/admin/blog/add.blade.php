@extends('layouts.admin')

@section('title', 'Add Blogs')

@section('content')


<x-breadcumb title="Add Blogs" />

<!-- Tables start -->
<!-- Row start -->
<div class="row">
    <div class="col-sm-12">


        <div class="card">
            <div class="card-header">
                <h5 class="card-header-text">Add New Blog</h5>
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
                <form action="/admin/blogs" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group row">
                        <label for="name" class="col-xs-2 col-form-label form-control-label">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="name" name="name" placeholder="Name">
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
                                <option value="" selected disabled>Select category</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="created_by" class="col-xs-2 col-form-label form-control-label">Author</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="created_by" name="created_by">
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="desc" class="col-xs-2 col-form-label form-control-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="desc" name="desc" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
