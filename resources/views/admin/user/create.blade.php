@extends('layouts.admin')

@section('title', 'Add New User')

@push('style')
<link rel="stylesheet" href="{{ asset('backend/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
@endpush

@section('content')

<x-breadcumb title="Add
        New User" />
<div class="row">
    <div class="col-xl-9 mx-auto">
        <h6 class="mb-0 text-uppercase">Add User</h6>
        <hr>

        <div class="card">
            <div class="card-body">
                <form class="row g-3 needs-validation" novalidate="" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>

                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required>

                    </div>
                    <div class="col-md-6">
                        <label for="address" class="form-label">Address</label>
                        <input type="address" name="address" id="address" class="form-control" placeholder="Enter address">
                    </div>

                    <div class="col-md-6">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone">Role</label>

                        <select name="roles[]" id="role" class="form-control select2" multiple>
                            <option value="" disabled>Select Role</option>
                            @foreach ($roles as $role)
                            <option value="{{ $role->name }}">
                                {{ $role->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="phone">Password</label>
                        <input type="password" name="password" id="phone" class="form-control" required>
                    </div>


                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="photo" class="form-control" id="image"> <br>
                            <img id="showImage" class="form-check-input" src="{{ url('upload/no_image.jpg') }}" alt="Admin" style="width:100px; height: 100px;">
                        </div>
                    </div>

                    {{-- Submit Button --}}
                    <div class="col-md-12 mt-5">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>

</form>
@endsection


@push('script')
<script src="{{ asset('backend/plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('backend/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
</script>
<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "Select Role"
            , allowClear: true
        });
    });
</script>
@endpush
