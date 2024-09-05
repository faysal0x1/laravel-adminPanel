@extends('layouts.admin')

@section('title', 'Add Posts')

@section('content')


    <x-breadcumb title="Add Posts" />

    <!-- Tables start -->
    <!-- Row start -->
    <div class="row">
        <div class="col-sm-12">


            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Add New Posts</h5>
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
                        <form class="row g-3 needs-validation" novalidate="" action="{{ route('post.store') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-md-6">
                                <label for="name" class="col-xs-2 col-form-label form-control-label">Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="name" name="name"
                                        placeholder="Name">
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
                                    <textarea class="form-control" id="desc" name="desc" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
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
