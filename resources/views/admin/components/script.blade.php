<!-- Required Jqurey -->
<script src="{{ asset('assets/plugins/Jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/plugins/tether/dist/js/tether.min.js') }}"></script>

<!-- Required Fremwork -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Scrollbar JS-->
<script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js') }}"></script>

<!--classic JS-->
<script src="{{ asset('assets/plugins/classie/classie.js') }}"></script>

<!-- notification -->
<script src="{{ asset('assets/plugins/notification/js/bootstrap-growl.min.js') }}"></script>

<!-- Sparkline charts -->
<script src="{{ asset('assets/plugins/jquery-sparkline/dist/jquery.sparkline.js') }}"></script>
<!-- Counter js  -->
<script src="{{ asset('assets/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/plugins/countdown/js/jquery.counterup.js') }}"></script>

<!-- Echart js -->


<!-- DataTables JS -->
{{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script> --}}




<!-- custom js -->
<script type="text/javascript" src="{{ asset('assets/js/main.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/pages/dashboard.js') }}"></script>
<script type="{{asset('text/javascript" src="assets/pages/elements.js')}}"></script>
<script src="{{ asset('assets/js/menu.min.js') }}"></script>
<script>
    var $window = $(window);
    var nav = $('.fixed-button');
    $window.scroll(function() {
        if ($window.scrollTop() >= 200) {
            nav.addClass('active');
        } else {
            nav.removeClass('active');
        }
    });
</script>

{{-- <script src="{{ asset('backend/js/index.js') }}"></script> --}}

<script src="{{ asset('backend/js/app.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('backend/js/custom.js') }}"></script>
<script src="{{ asset('backend/js/toggleStatus.js') }}"></script>

@stack('script')
