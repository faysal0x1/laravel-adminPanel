@extends('layouts.admin')

@section('title', 'Site Settings')


@section('content')

    <x-breadcumb title="Site Settings" />

    <form action="{{ route('admin.settings.update') }}" method="post" enctype="multipart/form-data">

        @csrf

        <div class="row">
            <input type="hidden" name="id" value="{{ $settings->id ?? '' }}" hidden">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="site_name">Site Name</label>
                    <input type="text" name="site_name" id="site_name" class="form-control"
                        value="{{ $settings->site_name ?? '' }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="site_title">Site Title</label>
                    <input type="text" name="site_title" id="site_title" class="form-control"
                        value="{{ $settings->site_title ?? '' }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="site_description">Site Description</label>
                    <input type="text" name="site_description" id="site_description" class="form-control"
                        value="{{ $settings->site_description ?? '' }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="site_email">Site Email</label>
                    <input type="email" name="site_email" id="site_email" class="form-control"
                        value="{{ $settings->site_email ?? '' }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="site_phone">Site Phone</label>
                    <input type="text" name="site_phone" id="site_phone" class="form-control"
                        value="{{ $settings->site_phone ?? '' }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="site_address">Site Address</label>
                    <input type="text" name="site_address" id="site_address" class="form-control"
                        value="{{ $settings->site_address ?? '' }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="site_map">Site Map</label>
                    <input type="text" name="site_map" id="site_map" class="form-control"
                        value="{{ $settings->site_map ?? '' }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" name="facebook" id="facebook" class="form-control"
                        value="{{ $settings->facebook ?? '' }}">
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <label for="youtube">youtube</label>
                    <input type="text" name="youtube" id="youtube" class="form-control"
                        value="{{ $settings->youtube ?? '' }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="logo">logo</label>
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
