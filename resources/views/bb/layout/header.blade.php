<!DOCTYPE html>

<html class="loading semi-dark-layout" lang="en" data-layout="semi-dark-layout" data-textdirection="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="0Wt5s4mhdtFsZ6fCEkCqyU40LBPzEAzCe7jXleOh">
    <title>Dashboard Admin - Biz Portal</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://bbadmin.businessboosters.com.my/images/logo/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('bb/css/vendors.min.css')}}">
    <!-- vendor css files -->
    <link rel="stylesheet" type="text/css"
        href="http://bbadmin.businessboosters.com.my/themes/modern-admin/app-assets/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://bbadmin.businessboosters.com.my/themes/modern-admin/app-assets/fonts/meteocons/style.css">
    <link rel="stylesheet" type="text/css"
        href="http://bbadmin.businessboosters.com.my/themes/modern-admin/app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css"
        href="http://bbadmin.businessboosters.com.my/themes/modern-admin/app-assets/vendors/css/charts/chartist.css">
    <link rel="stylesheet" type="text/css"
        href="http://bbadmin.businessboosters.com.my/themes/modern-admin/app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
    <link rel="stylesheet"
        href="http://bbadmin.businessboosters.com.my/themes/modern-admin/app-assets/vendors/css/extensions/toastr.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="http://bbadmin.businessboosters.com.my/themes/modern-admin/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css"
        href="http://bbadmin.businessboosters.com.my/themes/modern-admin/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css"
        href="http://bbadmin.businessboosters.com.my/themes/modern-admin/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css"
        href="http://bbadmin.businessboosters.com.my/themes/modern-admin/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css"
        href="http://bbadmin.businessboosters.com.my/themes/modern-admin/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css"
        href="http://bbadmin.businessboosters.com.my/themes/modern-admin/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css"
        href="http://bbadmin.businessboosters.com.my/themes/modern-admin/app-assets/fionts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('bb/css/style.css')}}">
    <link rel="stylesheet" type="text/css"
        href="http://bbadmin.businessboosters.com.my/themes/modern-admin/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css"
        href="http://bbadmin.businessboosters.com.my/themes/modern-admin/app-assets/css/pages/timeline.css">
    <link rel="stylesheet" type="text/css"
        href="http://bbadmin.businessboosters.com.my/themes/modern-admin/app-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet"
        href="http://bbadmin.businessboosters.com.my/themes/modern-admin/app-assets/css/plugins/extensions/toastr.css">
    <link rel="stylesheet" href="http://bbadmin.businessboosters.com.my/themes/modern-admin/assets/css/style.css" />
    <link rel="stylesheet" href="{{ asset('bb/css/datatables.min.css')}}" />
    
    <style>

    </style>
</head>

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-lg-none mr-auto"><a
                            class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto">
                        <a class="navbar-brand" href="/">
                            <img class="brand-logo" alt="BizApp logo" src="http://bbadmin.businessboosters.com.my/storage/bb_logo_36.png">
                            <h3 class="brand-text">BizApp</h3>
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
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <span class="mr-1 user-name text-bold-700">Business Booster</span>
                                <span class="avatar avatar-online">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAGp0lEQVRogdWaa2xU1xHHf7O+NuvXLnGoE2hwaAmBNmBoKtLaSkiaojbJh0ipahdl4z4ErUgfKlklammonAi1EIkubYUSGQlVoV0jIKJVhaKUINrEKcYJhZrFgaKYOraxMdSG6wdhvY/ph32w692179oLmP+ne87M3Pufe+aeM2fOFXIAp8tdDqwAqlR1mSDzEGYBjoiGDoP8D+gETii0CBwyvZ6eqT5bpkDaAawCXKr6oIjYJnGb90F3obLTbPQMTIZH1g44n3aXKawX4QfE3/CUcUXRnYJszHZULDvgdLkNRdcK8ityR3wsrgCvAJtNr2fUioElB5wu9zzgj8CDk6aWFfTfIHWm13NyIs0JHXC63I8AfwZm5oBZNrgC1Jlez77xlPLGEzpc7meAvQLFuWRmEfmqWmOvrBr0+44cyaSU0QGHy/0Mqq+LiHF9+E0MERGQx+xLqkb8vubD6XTSOhANm703k3wiFF1pr6z+0O9r/nCsLOUbiH6wx7nxMT8uFEaB5YNez4nE/qTFx+lyG0Rmm2lFHkCgAHS30+W2J/YnOaDoWm7YVJk9BFmkUJ/cF4XzaXcZwn+5fotUrhBUWDjo9ZyFhBFQWM/0Jw9gCGyMNQTiiVkXt4YDAEHQz5jerd2xEVjFrUMewAD5fvQCAFcmzbKSIt7ZuC6tTFUJBENcGvkE38fn2H7wMKe6zyfpLPz0Hbzx/OqM9qPBEP1DIxw720XDgffouGg5q14F1IvT5S5X1d5M+fwsRwmnfrfB0h1Hg0G+t+1PHGg9He9bXDGbv7/8U0v2w1f91GzZwdH2Tkv6wBIbsCKbzUhbVy+tHd20dnTj+7iH9vMXCYXDABQYBr9fXUNhQX5aW1WN27Z2dOPr7KHjQj+qCkCJfQbb1tQiYjHLVx41gCqr5AFqtuzg4uBwUt99c2fz1oYfYi/I5/bSYh5YcDfvtH2UYhtWZeXL21L6H/rcfN54YQ02EebfOYuFc8o5fa7PAn+qbKq6LBsH0qGtq5e27t54u8DILoVqOtVO74CZYD9uknwNostsgszL6mlpcOdMBwtmlwPgDwQ51t6Vlf29c8q5Y2YpAAPDI5bePoAgFUa0emAZL33rCa6OBgCwieAosrPi8wtwFEZSlE37DtA/PJLW1ibCb77z1LW2zUZZcREP33cPRl4eYVU2NO5nNBiySqfIIMv5v7b6/oyyPYeP8drfmjLKRYRvP/KljPLX3mpib/PxbOgwmVJIRtRW38/+X6xlZnHhpOx/9PgKdq37LvZ869+QES06lVg1ePiXv6V/KBIieTYbJYUzWDx3NvW1TzCnzMnye+5mk+tJnt2+O8U2FA6z1L0p3s7Ls+EotPPF+RXU1z7ObcVFrFy6iJ8/9TVe2vOmJT62aMXMMi4ODtNnDtFnDtFzyeRMzwX2tbSy3vvXuM6Ty5cwI8NMFLPtM4foGTA5fa4P77sfsHnfgbhOTfUXLHFRGLURKfdNGRfMofh1gWFQWmQfRzsVfQn2t5daqyEIdNiAExNqTgB7vsGzX38o3r48ciUeZlZQWmhnzVer4+3285aD4qQRLbT+2KrF3udXEwzFpjmhwMhj7qzbKLHPiOvsavpXPD1IhE2Eg/WJjxLs+QYVnypLSj+8TR9YpdNiCByyqg2RtGE8HD/bxSt/eTutTERYOu+uce0P+c6w/e1/WqVzyDC9nh6ny/0+8EA6jXA4zPnLg6kChZCGCQTDXA0E6L1kcvDEf3j9Hy34A8G4WiCU3l41cu9AKMQnowG6+y/z5rE2dr13lFA4dfTSEOg0vVuPRndkz60D2WrN6ekBVbYMNnpeiCxkKjuJ1CJvCahqWKABoiux2egZUHTnzaVlHSKy32z0fAQJqYQgG7kFRkFVw8CLsXY88fb7mofslVUG8JWbQcwyhIZB79Y/xJpjk7nNkcOF6QrtFORniT1JDkSOdaSOaRhKkdCROtPrSZqTU9Lp6LFOXTTWpg1E5Cem1/Pu2P60m0+/r/mUvbJqEOSx609tYkTn/F+nk2XcPft9R47Yl1SNKLpSLNc5co/YgpVJbuWQ75sK3kh9/sZBVcPRsHl1PD1Lb9bhcleC7hZkUW7oTQTtjH6wKTE/FpYKMH5fc5+9snqHRkrbXybHe+kYVDWM0CDIN0yv54wVm6xj2+FyfzZan6/lWnF4SoiGy37gRSuH24mYws8ez90VLXGvAu6d3F20U1X2CDTEcptskZPZxelyL0Z5VKEK0WWCVABFSVRhVKADOAm0EPnd5uhUn/1/8YdxbwaKnHMAAAAASUVORK5CYII="
                                        alt="Business Booster"><i></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="http://bbadmin.businessboosters.com.my/profile"><i
                                        class="ft-user"></i> Profile</a>
                                <a class="dropdown-item"
                                    href="http://bbadmin.businessboosters.com.my/change-password"><i
                                        class="la la-key"></i> Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void" onclick="$('#logout-form').submit();"><i
                                        class="ft-power"></i> Logout</a>
                                <form id="logout-form" action="http://bbadmin.businessboosters.com.my/logout/submit"
                                    method="POST" style="display: none;">
                                    <input type="hidden" name="_token" value="0Wt5s4mhdtFsZ6fCEkCqyU40LBPzEAzCe7jXleOh">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->