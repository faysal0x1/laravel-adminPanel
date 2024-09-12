<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--favicon-->
    <link rel="icon" href="{{ asset('backend/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('backend/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('backend/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('backend/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/dark-theme.css') }}" />

    <link rel="stylesheet" href="{{ asset('backend/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/header-colors.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    @stack('style')


</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        @include('admin.partials.sidebar')
        <!--end sidebar wrapper -->
        <!--start header -->
        @include('admin.partials.header')
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->

        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © {{ date('Y') }}. All right reserved.</p>
        </footer>
    </div>
    <!--end wrapper-->
    <!--start switcher-->

    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="{{ asset('backend/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>


    <script src="{{ asset('backend/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('backend/js/index.js') }}"></script>

    <script src="{{ asset('backend/js/app.js') }}"></script>


    @stack('script')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    {{-- <script src="{{ asset('backend/js/custom.js') }}"></script> --}}


    <script>
        $(".toggleswitch-checkbox").change(function() {
            var model = $(this).data("model");
            var id = $(this).data("id");
            var state = $(this).prop("checked");
            var checkbox = $(this);

            console.log(model, id, state);

            Swal.fire({
                title: "Are you sure?",
                text: "You want to change the status!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, change it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    axios
                        .get(`/toggle-status/${model}/${id}`)
                        .then((response) => {
                            Swal.fire({
                                icon: "success",
                                title: "Updated!",
                                text: "The status has been updated.",
                                timer: 2000,
                                showConfirmButton: false,
                                toast: true,
                                position: "top-end",
                            });
                        })
                        .catch((error) => {
                            Swal.fire({
                                icon: "error",
                                title: "Error!",
                                text: "There was an issue updating the status.",
                                timer: 2000,
                                showConfirmButton: false,
                                toast: true,
                                position: "top-end",
                            });
                            checkbox.prop("checked", !state); // Revert the toggle switch
                        });
                } else {
                    checkbox.prop("checked", !state); // Revert the toggle switch
                }
            });
        });
    </script>


    {{-- Toastify JS --}}

    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script> --}}






    <script src="{{ asset('backend/js/custom.js') }}"></script>
</body>

</html>
