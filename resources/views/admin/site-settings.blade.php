@extends('layouts.admin')

@section('title', 'Site Settings')


@section('content')

<div class="row">
    <div class="col-xl-12 mx-auto">
        <h6 class="mb-0 text-uppercase">Site Settings"></h6>
        <hr>
        <div class="card">
            <div class="card-body">

                <div class="p-4 border border-rounded">
                    <form action="{{ route('admin.settings.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="id" value="{{ $settings->id ?? '' }}" hidden">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="site_name" class="form-label">Site Name</label>
                                    <input type="text" name="site_name" id="site_name" class="form-control"
                                        value="{{ $settings->site_name ?? '' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="site_title" class="form-label">Site Title</label>
                                    <input type="text" name="site_title" id="site_title" class="form-control"
                                        value="{{ $settings->site_title ?? '' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="site_description" class="form-label">Site Description</label>
                                    <textarea name="site_description" id="site_description" cols="30" rows="5"
                                        class="form-control">{{ $settings->site_description ?? '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="site_email" class="form-label">Site Email</label>
                                    <input type="email" name="site_email" id="site_email" class="form-control"
                                        value="{{ $settings->site_email ?? '' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="site_phone" class="form-label">Site Phone</label>
                                    <input type="text" name="site_phone" id="site_phone" class="form-control"
                                        value="{{ $settings->site_phone ?? '' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="site_hotline" class="form-label">Site Hotlie</label>
                                    <input type="text" name="site_hotline" id="site_hotline" class="form-control"
                                        value="{{ $settings->site_hotline ?? '' }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="site_address" class="form-label">Site Address</label>
                                    <textarea name="site_address" id="site_address" cols="30" rows="5"
                                        class="form-control">{{ $settings->site_address ?? '' }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="site_map" class="form-label">Site Map</label>
                                    <textarea name="site_map" id="site_map" cols="30" rows="5"
                                        class="form-control">{{ $settings->site_map ?? '' }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="text" name="facebook" id="facebook" class="form-control"
                                        value="{{ $settings->facebook ?? '' }}">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="youtube" class="form-label">youtube</label>
                                    <input type="text" name="youtube" id="youtube" class="form-control"
                                        value="{{ $settings->youtube ?? '' }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="logo" class="form-label">logo</label>
                                    <input type="file" name="logo" id="logo" class="form-control"
                                        value="{{ $settings->logo ?? '' }}">
                                </div>
                            </div>

                            <div class="col-md-6" style="padding: 13px 35px 50px;">
                                <div class="form-group">
                                    <div class="col-sm-9 text-secondary">
                                        <img id="showImage"
                                            src="{{ !empty($settings->logo) ? url($settings->logo) : url('upload/no_image.jpg') }}"
                                            alt="Admin" style="width:100px; height: 100px;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="logo">Favicon</label>
                                    <input type="file" name="favicon" id="favicon" class="form-control"
                                        value="{{ $settings->favicon ?? '' }}">
                                </div>
                            </div>

                            <div class="col-md-6" style="padding: 13px 35px 50px;">
                                <div class="form-group">
                                    <div class="col-sm-9 text-secondary">
                                        <img id="showFavicon"
                                            src="{{ !empty($settings->favicon) ? url($settings->favicon) : url('upload/no_image.jpg') }}"
                                            alt="Admin" style="width:100px; height: 100px;">
                                    </div>
                                </div>
                            </div>

                            {{-- Submit Button --}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@push('script')
<script type="text/javascript">
    $(document).ready(function() {
                $('#logo').change(function(e) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#showImage').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });

                $('#favicon').change(function(e) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#showFavicon').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });


            });
</script>
@endpush

@endsection
