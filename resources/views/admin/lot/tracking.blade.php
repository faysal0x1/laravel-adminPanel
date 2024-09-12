@extends('layouts.admin')

@section('title', 'Add Tracking Info')

@push('style')
    <link rel="stylesheet" href="{{ asset('backend/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
@endpush

@section('content')

    <x-breadcumb title="Add
         Tracking Info" />
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <h6 class="mb-0 text-uppercase">Add Tracking Info

            </h6>
            <hr>

            <div class="card">
                <div class="card-body">
                    <form class="row g-3 needs-validation"action="{{ route('lot.tracking', $data->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <input type="hidden"  name="lot_id" value="{{ $data->id }}" hidden>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tracking_number" class="form-label">Tracking Number</label>
                                <input type="text" name="tracking_number" id="tracking_number" class="form-control"
                                    required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="shipping_mark" class="form-label">Shipping Mark</label>
                                <input type="text" name="shipping_mark" id="shipping_mark" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="delivered_date" class="form-label">Delivered Date </label>
                                <input type="date" name="delivered_date" id="delivered_date" class="form-control" required>
                            </div>
                        </div>



                        {{-- Data Repeater --}}
                        <div class="report-repeater">
                            <button data-repeater-create type="button" class="btn btn-primary">Add</button>

                            <div data-repeater-list="goods">
                                <div class="repeater-row mt-3 mb-3" data-repeater-item>
                                    <div class="row">

                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-sm-4 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="goods_category" id="goods_category"
                                                            class="form-control" placeholder="goods_category">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="weight" id="weight"
                                                            class="form-control" placeholder="Goods Weight">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="product_quality" id="product_quality"
                                                            class="form-control" placeholder="Goods Quality">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="cbm" id="cbm"
                                                            class="form-control" placeholder="CBM">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="length" id="length"
                                                            class="form-control" placeholder="Lenghth">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="width" id="width"
                                                            class="form-control" placeholder="Width">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="height" id="height"
                                                            class="form-control" placeholder="Height">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                    <div class="form-group">
                                                        <input type="number" min="0" name="packing_fee" id="packing_fee"
                                                            class="form-control" placeholder="Packing Fee">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-2">
                                            <div class="form-group">

                                                <button data-repeater-delete type="button"
                                                    class="btn btn-primary">Delete</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>



                        <div class="col-md-6"></div>

                        {{--  --}}

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
    </script>

    <script>
        $('select').select2({
            width: '100%'
            //theme: "bootstrap"
        });


        if ($('.report-repeater').length) {
            var reportRepeater = $('.report-repeater').repeater({
                defaultValues: {
                    'textarea-input': 'foo',
                    'text-input': 'bar',
                },
                show: function() {
                    $(this).slideDown();


                },
                hide: function(deleteElement) {
                    if (confirm('Are you sure you want to delete this?')) {
                        $(this).slideUp(deleteElement);
                    }
                }

            });
        }
    </script>
@endpush
