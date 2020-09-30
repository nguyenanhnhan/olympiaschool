<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Olympia School | @yield('title')</title>
    <base href="{{asset('')}}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="be/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/font-awesome.min.css">
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet"
        type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

    <!-- summernote CSS
		============================================ -->
        <link rel="stylesheet" href="be/css/summernote/summernote.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/owl.carousel.css">
    <link rel="stylesheet" href="be/css/owl.theme.css">
    <link rel="stylesheet" href="be/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/meanmenu.min.css">
    @yield('style')
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/main.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/form/all-type-forms.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/morrisjs/morris.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/dropzone/dropzone.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="be/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="be/css/calendar/fullcalendar.print.min.css">
    <!-- touchspin CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/touchspin/jquery.bootstrap-touchspin.min.css">
    <!-- datapicker CSS
            ============================================ -->
    <link rel="stylesheet" href="be/css/datapicker/datepicker3.css">
    <!-- forms CSS
            ============================================ -->
    <link rel="stylesheet" href="be/css/form/themesaller-forms.css">
    <!-- colorpicker CSS
            ============================================ -->
    <link rel="stylesheet" href="be/css/colorpicker/colorpicker.css">
    <!-- select2 CSS
            ============================================ -->
    <link rel="stylesheet" href="be/css/select2/select2.min.css">
    <!-- chosen CSS
            ============================================ -->
    <link rel="stylesheet" href="be/css/chosen/bootstrap-chosen.css">
    <!-- ionRangeSlider CSS
            ============================================ -->
    <link rel="stylesheet" href="be/css/ionRangeSlider/ion.rangeSlider.css">
    <link rel="stylesheet" href="be/css/ionRangeSlider/ion.rangeSlider.skinFlat.css">
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/editor/select2.css">
    <link rel="stylesheet" href="be/css/editor/datetimepicker.css">
    <link rel="stylesheet" href="be/css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="be/css/editor/x-editor-style.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="be/css/data-table/bootstrap-editable.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="be/style.css">
    <link rel="stylesheet" href="be/css/my.css">
    @yield('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="be/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    @include('be/layouts/left_menu')
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper" @if (Auth::user()->role == 2)
        style="margin-left: 0px;"
        @endif >>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro" style="height: 100px">
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            @include('be/layouts/header')
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.html">Dashboard v.1</a></li>
                                                <li><a href="index-1.html">Dashboard v.2</a></li>
                                                <li><a href="index-3.html">Dashboard v.3</a></li>
                                                <li><a href="analytics.html">Analytics</a></li>
                                                <li><a href="widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="events.html">Event</a></li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="all-professors.html">All Professors</a>
                                                </li>
                                                <li><a href="add-professor.html">Add Professor</a>
                                                </li>
                                                <li><a href="edit-professor.html">Edit Professor</a>
                                                </li>
                                                <li><a href="professor-profile.html">Professor Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="all-students.html">All Students</a>
                                                </li>
                                                <li><a href="add-student.html">Add Student</a>
                                                </li>
                                                <li><a href="edit-student.html">Edit Student</a>
                                                </li>
                                                <li><a href="student-profile.html">Student Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="all-courses.html">All Courses</a>
                                                </li>
                                                <li><a href="add-course.html">Add Course</a>
                                                </li>
                                                <li><a href="edit-course.html">Edit Course</a>
                                                </li>
                                                <li><a href="course-profile.html">Courses Info</a>
                                                </li>
                                                <li><a href="course-payment.html">Courses Payment</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            @yield('content')
            <div class="footer-copyright-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="footer-copy-right">
                                <p>Copyright © 2020. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jquery
		============================================ -->
        <script src="be/js/vendor/jquery-1.12.4.min.js"></script>
        <script>
            window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 5000);
        </script>
        <!-- bootstrap JS
		============================================ -->
        <script src="be/js/bootstrap.min.js"></script>
        <!-- wow JS
		============================================ -->
        <script src="be/js/wow.min.js"></script>
        <!-- price-slider JS
		============================================ -->
        <script src="be/js/jquery-price-slider.js"></script>
        <!-- meanmenu JS
		============================================ -->
        <script src="be/js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
		============================================ -->
        <script src="be/js/owl.carousel.min.js"></script>
        <!-- sticky JS
		============================================ -->
        <script src="be/js/jquery.sticky.js"></script>
        <!-- scrollUp JS
		============================================ -->
        <script src="be/js/jquery.scrollUp.min.js"></script>
        <!-- mCustomScrollbar JS
        ============================================ -->
        @yield('script')
        <!-- summernote JS
            ============================================ -->
        <script src="be/js/summernote/summernote.min.js"></script>
        <script src="be/js/summernote/summernote-active.js"></script>
        <script src="be/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="be/js/scrollbar/mCustomScrollbar-active.js"></script>
        <!-- metisMenu JS
		============================================ -->
        <script src="be/js/metisMenu/metisMenu.min.js"></script>
        <script src="be/js/metisMenu/metisMenu-active.js"></script>

        <!-- touchspin JS
		============================================ -->
        <script src="be/js/touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="be/js/touchspin/touchspin-active.js"></script>
        <!-- colorpicker JS
		============================================ -->
        <script src="be/js/colorpicker/jquery.spectrum.min.js"></script>
        <script src="be/js/colorpicker/color-picker-active.js"></script>
        <!-- datapicker JS
		============================================ -->
        <script src="be/js/datapicker/bootstrap-datepicker.js"></script>
        <script src="be/js/datapicker/datepicker-active.js"></script>
        <!-- input-mask JS
		============================================ -->
        <script src="be/js/input-mask/jasny-bootstrap.min.js"></script>
        <!-- chosen JS
		============================================ -->
        <script src="be/js/chosen/chosen.jquery.js"></script>
        <script src="be/js/chosen/chosen-active.js"></script>
        <!-- select2 JS
		============================================ -->
        <script src="be/js/select2/select2.full.min.js"></script>
        <script src="be/js/select2/select2-active.js"></script>
        <!-- ionRangeSlider JS
		============================================ -->
        <script src="be/js/ionRangeSlider/ion.rangeSlider.min.js"></script>
        <script src="be/js/ionRangeSlider/ion.rangeSlider.active.js"></script>
        <!-- rangle-slider JS
		============================================ -->
        <script src="be/js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
        <script src="be/js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
        <script src="be/js/rangle-slider/rangle-active.js"></script>
        <!-- knob JS
		============================================ -->
        <script src="be/js/knob/jquery.knob.js"></script>
        <script src="be/js/knob/knob-active.js"></script>
        <!-- tab JS
		============================================ -->
        <script src="be/js/tab.js"></script>

        <!-- data table JS
		============================================ -->
        <script src="be/js/data-table/bootstrap-table.js"></script>
        <script src="be/js/data-table/tableExport.js"></script>
        <script src="be/js/data-table/data-table-active.js"></script>
        <script src="be/js/data-table/bootstrap-table-editable.js"></script>
        <script src="be/js/data-table/bootstrap-editable.js"></script>
        <script src="be/js/data-table/bootstrap-table-resizable.js"></script>
        <script src="be/js/data-table/colResizable-1.5.source.js"></script>
        <script src="be/js/data-table/bootstrap-table-export.js"></script>
        <!--  editable JS
		============================================ -->
        <script src="be/js/editable/jquery.mockjax.js"></script>
        <script src="be/js/editable/mock-active.js"></script>
        <script src="be/js/editable/select2.js"></script>
        <script src="be/js/editable/moment.min.js"></script>
        <script src="be/js/editable/bootstrap-datetimepicker.js"></script>
        <script src="be/js/editable/bootstrap-editable.js"></script>
        <script src="be/js/editable/xediable-active.js"></script>
        <!-- Chart JS
		============================================ -->
        <script src="be/js/chart/jquery.peity.min.js"></script>
        <script src="be/js/peity/peity-active.js"></script>
        <!-- tab JS
		============================================ -->
        <script src="be/js/tab.js"></script>
        <!-- plugins JS
		============================================ -->
        <script src="be/js/plugins.js"></script>
        <!-- main JS
		============================================ -->
        <script src="be/js/main.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
</body>

</html>