<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Admin Panel</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
    <meta name="author" content="JSOFT.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css')}}" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/morris/morris.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/pnotify/pnotify.custom.css')}}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('assets/stylesheets/theme.css')}}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('assets/stylesheets/skins/default.css')}}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/stylesheets/theme-custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('assets/vendor/modernizr/modernizr.js')}}"></script>

</head>
<body>
<section class="body">

    <!-- start: header -->
    <header class="header">
        <div class="logo-container">
            <a href="/admin/users" class="logo">
                <img src="{{asset('assets/images/logo.png')}}" height="35" alt="JSOFT Admin" />
            </a>
            <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <div class="header-right">



            <span class="separator"></span>

            <div id="userbox" class="userbox">
                <a href="" data-toggle="dropdown">
                    <figure class="profile-picture">
                        <img src="{{asset('assets/images/!logged-user.jpg')}}" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                    </figure>
                    <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                        <span class="name">{{auth()->user()->first_name}}</span>
                        <span class="role">administrator</span>
                    </div>

                    <i class="fa custom-caret"></i>
                </a>

                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="divider"></li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="{{ route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <div class="inner-wrapper">
        <!-- start: sidebar -->
        <aside id="sidebar-left" class="sidebar-left">

            <div class="sidebar-header">
                <div class="sidebar-title">
                    Navigation
                </div>
                <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <div class="nano">
                <div class="nano-content">
                    <nav id="menu" class="nav-main" role="navigation">
                        <ul class="nav nav-main">
                            <li class="nav-active">
                                <a href="/admin/users">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <span>Users</span>
                                </a>
                            </li>
                            <li class="nav-active">
                                <a href="/admin/deals">
                                    <i class="fa fa-money" aria-hidden="true"></i>
                                    <span>Transactions</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <hr class="separator" />

                </div>

            </div>

        </aside>
        <!-- end: sidebar -->
        @yield('content')
    </div>
</section>

<!-- Vendor -->
<script src="{{asset('assets/vendor/jquery/jquery.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/vendor/nanoscroller/nanoscroller.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('assets/vendor/magnific-popup/magnific-popup.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>

<!-- Specific Page Vendor -->
<script src="{{asset('assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-appear/jquery.appear.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-easypiechart/jquery.easypiechart.js')}}"></script>
<script src="{{asset('assets/vendor/flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/vendor/flot-tooltip/jquery.flot.tooltip.js')}}"></script>
<script src="{{asset('assets/vendor/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('assets/vendor/flot/jquery.flot.categories.js')}}"></script>
<script src="{{asset('assets/vendor/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-sparkline/jquery.sparkline.js')}}"></script>
<script src="{{asset('assets/vendor/raphael/raphael.js')}}"></script>
<script src="{{asset('assets/vendor/morris/morris.js')}}"></script>
<script src="{{asset('assets/vendor/gauge/gauge.js')}}"></script>
<script src="{{asset('assets/vendor/snap-svg/snap.svg.js')}}"></script>
<script src="{{asset('assets/vendor/liquid-meter/liquid.meter.js')}}"></script>
<script src="{{asset('assets/vendor/jqvmap/jquery.vmap.js')}}"></script>
<script src="{{asset('assets/vendor/jqvmap/data/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('assets/vendor/jqvmap/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js')}}"></script>
<script src="{{asset('assets/vendor/jqvmap/maps/continents/jrquery.vmap.asia.js')}}"></script>
<script src="{{asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js')}}"></script>
<script src="{{asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js')}}"></script>
<script src="{{asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js')}}"></script>
<script src="{{asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js')}}"></script>
<script src="{{asset('assets/vendor/pnotify/pnotify.custom.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('assets/javascripts/theme.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('assets/javascripts/theme.custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('assets/javascripts/theme.init.js')}}"></script>


<!-- Examples -->
<script src="{{asset('assets/javascripts/dashboard/examples.dashboard.js')}}"></script>
<script src="{{asset('assets/javascripts/tables/examples.datatables.default.js')}}"></script>
<script src="{{asset('assets/javascripts/tables/examples.datatables.row.with.details.js')}}"></script>
<script src="{{asset('assets/javascripts/tables/examples.datatables.tabletools.js')}}"></script>
<script src="{{asset('assets/javascripts/ui-elements/examples.lightbox.js')}}"></script>
<script src="{{asset('assets/javascripts/ui-elements/examples.lightbox.js')}}"></script>
<script src="{{asset('assets/javascripts/ui-elements/examples.notifications.js')}}"></script>
</body>
</html>