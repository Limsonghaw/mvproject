<!DOCTYPE html>

<html class="loading semi-dark-layout" lang="en" data-layout="semi-dark-layout" data-textdirection="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}">

    <title>Venues - Biz Portal</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://mv.snaprewards.com.my/images/logo/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700"
        rel="stylesheet">


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('mv/css/vendors.min.css') }}">

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- vendor css files -->
    <link rel="stylesheet"
        href="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/css/plugins/forms/validation/form-validation.css">
    <link rel="stylesheet"
        href="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet"
        href="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/vendors/css/extensions/toastr.css">

    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css"
        href="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css"
        href="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css"
        href="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css"
        href="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css"
        href="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet"
        href="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/vendors/css/extensions/toastr.css">
    <link rel="stylesheet"
        href="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/css/plugins/extensions/toastr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css"
        href="http://mv.snaprewards.com.my/themes/modern-admin/app-assets/css/plugins/extensions/toastr.css">
    <link rel="stylesheet" href="http://mv.snaprewards.com.my/themes/modern-admin/assets/css/style.css" />
    <link rel="stylesheet" href="{{ asset('mv/css/wizard.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mv/css/OtherInfo.css') }}">
    <!-- END: Custom CSS-->
    <!-- BEGIN: summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <!-- END:summernote -->
    <!-- BEGIN: chooseMultipleDate -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css"
        rel="stylesheet" />
    <!-- END: chooseMultipleDate -->
    <!-- BEGIN: daterangetimes -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!-- END: daterangetimes -->
    <!-- BEGIN: choose Multiple Select -->
    <link rel="stylesheet" type="text/css" href="{{ asset('mv/css/select2.min.css') }}" />
    <!-- BEGIN: choose Multiple Select-->

    {{-- toggle --}}
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    {{-- toggle --}}

</head>

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu"
    data-col="2-columns">
    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-lg-none mr-auto"><a
                            class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto" style="margin-left: auto;">
                        <a class="navbar-brand" href="/">
                            <img src="http://mv.snaprewards.com.my/storage/images/20230217150647.jpeg"
                                class="brand-logo" style="width: 75px;">
                        </a>
                    </li>
                    <li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0"
                            data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white"
                                data-ticon="ft-toggle-right"></i></a></li>
                    <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                            data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i
                                    class="ficon ft-maximize"></i></a></li>


                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#"
                                data-toggle="dropdown">
                                <span class="mr-1 user-name text-bold-700">Moms Village</span>
                                <span class="avatar avatar-online">
                                    <img src="data:image/png;base64,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"
                                        alt="Moms Village"><i></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="http://mv.snaprewards.com.my/admin/profile"><i
                                        class="ft-user"></i> Profile</a>
                                <a class="dropdown-item" href="http://mv.snaprewards.com.my/admin/change-password"><i
                                        class="la la-key"></i> Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void"
                                    onclick="$('#logout-form').submit();"><i class="ft-power"></i> Logout</a>
                                <form id="logout-form" action="http://mv.snaprewards.com.my/admin/logout/submit"
                                    method="POST" style="display: none;">
                                    <input type="hidden" name="_token"
                                        value="HXYDNRryC05dVSYy9h74UK2q4ma3RdgTIfIRQSRL">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav> <!-- END: Header-->
