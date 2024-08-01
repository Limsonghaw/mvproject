<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
        <span class="float-md-left d-block d-md-inline-block">
            Copyright &copy; 2021 <a class="text-bold-800 grey darken-2" href="http://businessboosters.com.my"
                target="_blank">Business Boosters</a>
        </span>
        <span class="float-md-right d-none d-lg-block">Powerd by Business Boosters<span id="scroll-top"></span></span>
    </p>
</footer>
<!-- END: Footer-->
<!-- End: Content-->
<!--BEGIN: vendor files -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/vendors/js/vendors.min.js"></script>
<script src="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/vendors/js/extensions/toastr.min.js"></script>
<script src="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/vendors/js/tables/datatable/datatables.min.js">
</script>
<script src="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/vendors/js/extensions/toastr.min.js"></script>
<!--END: vendor files -->
<!--BEGIN: Page js files -->
<script src="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/js/core/app-menu.js"></script>
<script src="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/js/core/app.js"></script>
<script src="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/js/scripts/extensions/toastr.js"></script>
<!--END: Page js files -->
<script
    src="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/js/scripts/tables/datatables/datatable-basic.js">
</script>
<!--BEGIN: fontawesome -->
<script src="https://kit.fontawesome.com/ad3f3e997d.js" crossorigin="anonymous"></script>
<!--END :fontawesome End -->
<!-- venueInfo  -->
<script
    src="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js">
</script>
<script
    src="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/js/scripts/forms/validation/form-validation.js">
</script>
<!-- checkbox -->
<script src="{{ asset('mv/js/checkbox.js') }}" crossorigin="anonymous"></script>
<!-- checkbox end -->
<!-- wizard -->
<script src="{{ asset('mv/js/jquery.steps.min.js') }}"></script>
<script src="{{ asset('mv/js/jquery.validate.min.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('mv/js/wizard-steps.min.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('mv/js/filter.js') }}"></script>
<!-- wizard end -->
<!-- summernote -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="{{ asset('mv/js/summernote.js') }}"></script>
<!-- summernote end -->
<!-- chooseMultipleDate -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
<script src="{{ asset('mv/js/chooseMultipleDate.js') }}"></script>
<!-- chooseMultipleDate end -->
<!-- radio- title disable -->
<script src="{{ asset('mv/js/titleInputDisable.js') }}"></script>
<!-- radio- title disable end -->
{{-- multipleselect --}}
<script src="{{ asset('mv/js/select2.full.min.js') }}"></script>
<script src="{{ asset('mv/js/form-select2.min.js') }}"></script>
{{-- multipleselect end --}}
<!-- online Link Disabled -->
<script src="{{ asset('mv/js/radio_Disable.js') }}"></script>
<!-- online Link Disabled end -->
<!-- fileselect -->
<script src="{{ asset('mv/js/browser.js') }}"></script>
<!-- fileselect end -->
<!-- daterangetimes -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript" src="{{ asset('mv/js/daterange.js') }}"></script>
<!-- daterangetimes end-->
{{-- addcustomoption --}}
{{-- <script src="{{ asset('mv/js/addcustomoption.js') }}"></script> --}}
{{-- addcustomoption end --}}
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

@yield('categoryjs')

@yield('skujs')

</body>

</html>
