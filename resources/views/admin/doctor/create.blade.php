@extends('layouts.admin')

@section('title', 'Add New Doctor')

@push('style')
    <link rel="stylesheet" href="{{ asset('backend/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
@endpush

@section('content')

    <x-breadcumb title="Add
        New Doctor" />
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Add Doctor</h6>
            <hr>

            <div class="card">
                <div class="card-body">
                    <form class="row g-3 needs-validation" novalidate="" action="{{ route('admin.doctor.store') }}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender" class="form-label">Gender</label>
                                <select name="gender" id="gender" class="form-control select2">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" name="age" id="age" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>

                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Enter Email" required>

                        </div>
                        <div class="col-md-6">
                            <label for="address" class="form-label">Address</label>

                            <input type="address" name="address" id="address" class="form-control"
                                placeholder="Enter address">

                        </div>
                        <div class="col-md-6">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" required>

                        </div>

                        <div class="col-md-6">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="Enter Title" required>
                        </div>
                        <div class="col-md-6">

                            <label for="degree" class="form-label">Degree</label>
                            <input type="text" name="degree" id="degree" class="form-control"
                                placeholder="Enter Degree" required>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="Department" class="form-label">Department</label>
                            <select name="department" id="department" class="form-control select2 w-50">
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="fees" class="form-label">Fees</label>
                            <input type="number" name="fees" id="fees" class="form-control" placeholder="fees"
                                required>
                        </div>

                        <div class="col-md-6">
                            <label for="experience">Experience</label>
                            <input type="number" name="experience" id="experience" class="form-control"
                                placeholder="Experience">
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <label for="Slots"> Slots in Munite</label>
                            <div class="form-group">
                                <select name="slot_duration" id="" class="form-control select2">
                                    @for ($i = 5; $i <= 60; $i += 5)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="Available">Available Days
                            </label>

                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="days[]" id="sunday"
                                        value="sunday">
                                    <label class="form-check-label" for="sunday">
                                        Sunday
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="days[]" id="monday"
                                        value="monday">
                                    <label class="form-check-label" for="monday">
                                        Monday
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="days[]" id="tuesday"
                                        value="tuesday">
                                    <label class="form-check-label" for="tuesday">
                                        Tuesday
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="days[]" id="wednesday"
                                        value="wednesday">
                                    <label class="form-check-label" for="wednesday">
                                        Wednesday
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="days[]" id="thursday"
                                        value="thursday">
                                    <label class="form-check-label" for="thursday">
                                        Thursday
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="days[]" id="friday"
                                        value="friday">
                                    <label class="form-check-label" for="friday">
                                        Friday
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="days[]" id="saturday"
                                        value="saturday">
                                    <label class="form-check-label" for="saturday">
                                        Saturday
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 mt-3">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="photo" class="form-control" id="image"> <br>
                                <img id="showImage" class="form-check-input" src="{{ url('upload/no_image.jpg') }}"
                                    alt="Admin" style="width:100px; height: 100px;">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description">Available Time</label>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="time" name="TimeSlot[0][from]"
                                                class="form-control timecount timepicker " placeholder="To time"
                                                id="time_to">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="time" name="TimeSlot[0][to]"
                                                class="form-control timecount timepicker " placeholder="To time"
                                                id="time_to">
                                        </div>

                                    </div>
                                </div>

                                {{-- Submit Button --}}
                                <div class="col-md-12 mt-5">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
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
            $('.select2').select2({});
        })
    </script>
@endpush
