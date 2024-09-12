@extends('layouts.admin')

@section('title', 'Add New Lot')

@push('style')
    <link rel="stylesheet" href="{{ asset('backend/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
@endpush

@section('content')

    <x-breadcumb title="Add
        New Lot" />
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Add Lot</h6>
            <hr>

            <div class="card">
                <div class="card-body">
                    <form class="row g-3 needs-validation"action="{{ route('lot.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lot_number" class="form-label">Lot Number</label>
                                <input type="text" name="lot_number" id="name" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="shipping_line" class="form-label">
                                    Shipping Line
                                </label>
                                <input type="text" name="shipping_line" id="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="shippinng_method" class="form-label">
                                    Shipping Method
                                </label>
                                <input type="text" name="shipping_method" id="name" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6"></div>
                        <div class="col-md-6 mt-3">
                            <label for="country_from_id" class="form-label">Country (From )</label>
                            <select name="country_from_id" id="country_from_id" class="form-control select2 w-50">
                                @foreach ($country as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mt-3">
                            <label for="country_to_id" class="form-label">Country (To )</label>
                            <select name="country_to_id" id="country_to_id" class="form-control select2 w-50">
                                @foreach ($country as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
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
            $('.select2').select2({});
        })
    </script>
@endpush
