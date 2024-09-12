@extends('layouts.admin')

@section('title', 'Edit Tracking Info')

@push('style')
<link rel="stylesheet" href="{{ asset('backend/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
@endpush

@section('content')
<x-breadcumb title="Edit Tracking Info" />
<div class="row">
    <div class="col-xl-12 mx-auto">
        <h6 class="mb-0 text-uppercase">Edit Tracking Info</h6>
        <hr>

        <div class="card">
            <div class="card-body">
                <form class="row g-3 needs-validation" action="{{ route('lot.add.product', $lotDetail->id) }}"
                    method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{ $lotDetail->id }}" hidden>
                    <input type="hidden" name="lot_id" value="{{ $lotDetail->lot_id }}" hidden>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tracking_number" class="form-label">Tracking Number</label>
                            <input type="text" name="tracking_number" id="tracking_number" class="form-control"
                                value="{{ $lotDetail->tracking_number }}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="shipping_mark" class="form-label">Shipping Mark</label>
                            <input type="text" name="shipping_mark" id="shipping_mark" class="form-control"
                                value="{{ $lotDetail->shipping_mark }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="delivered_date" class="form-label">Delivered Date </label>
                            <input type="date" name="delivered_date" id="delivered_date" class="form-control"
                                value="{{ $lotDetail->delivered_date }}" required>
                        </div>
                    </div>

                    {{-- Data Repeater --}}
                    <div class="report-repeater">
                        <button data-repeater-create type="button" class="btn btn-primary">Add</button>

                        <div data-repeater-list="goods">
                            @forelse($lotDetail->trackingDetail as $detail)
                            <div class="repeater-row mt-3 mb-3" data-repeater-item>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-sm-4 mb-3">
                                                <div class="form-group">
                                                    <input type="text" name="goods_category"
                                                        value="{{ $detail->goods_category }}" class="form-control"
                                                        placeholder="goods_category">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mb-3">
                                                <div class="form-group">
                                                    <input type="text" name="weight" value="{{ $detail->weight }}"
                                                        class="form-control" placeholder="Goods Weight">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mb-3">
                                                <div class="form-group">
                                                    <input type="text" name="product_quality"
                                                        value="{{ $detail->product_quality }}" class="form-control"
                                                        placeholder="Goods Quality">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mb-3">
                                                <div class="form-group">
                                                    <input type="text" name="cbm" value="{{ $detail->cbm }}"
                                                        class="form-control" placeholder="CBM">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mb-3">
                                                <div class="form-group">
                                                    <input type="text" name="length" value="{{ $detail->length }}"
                                                        class="form-control" placeholder="Length">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mb-3">
                                                <div class="form-group">
                                                    <input type="text" name="width" value="{{ $detail->width }}"
                                                        class="form-control" placeholder="Width">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mb-3">
                                                <div class="form-group">
                                                    <input type="text" name="height" value="{{ $detail->height }}"
                                                        class="form-control" placeholder="Height">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mb-3">
                                                <div class="form-group">
                                                    <input type="number" min="0" name="packing_fee"
                                                        value="{{ $detail->packing_fee }}" class="form-control"
                                                        placeholder="Packing Fee">
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
                            @empty
                            <div class="report-repeater">

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
                                                            <input type="text" name="product_quality"
                                                                id="product_quality" class="form-control"
                                                                placeholder="Goods Quality">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 mb-3">
                                                        <div class="form-group">
                                                            <input type="text" name="cbm" id="cbm" class="form-control"
                                                                placeholder="CBM">
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
                                                            <input type="number" min="0" name="packing_fee"
                                                                id="packing_fee" class="form-control"
                                                                placeholder="Packing Fee">
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
                            @endforelse
                        </div>
                    </div>

                    {{-- Submit Button --}}
                    <div class="col-md-12 mt-5">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script src="{{ asset('backend/plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('backend/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>

<script>
    $('select').select2({
        width: '100%'
    });

    if ($('.report-repeater').length) {
        var reportRepeater = $('.report-repeater').repeater({
            defaultValues: {
                'textarea-input': 'foo'
                , 'text-input': 'bar'
            , }
            , show: function() {
                $(this).slideDown();
            }
            , hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });
    }

</script>
@endpush
