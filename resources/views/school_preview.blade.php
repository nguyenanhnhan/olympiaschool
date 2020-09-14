<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Academic | Preview Lessonplans</title>
    <base href="{{asset('')}}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="be/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.7/jq-3.2.1/dt-1.10.16/datatables.min.css"/>
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/bootstrap.min.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/main.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/form/all-type-forms.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/educate-custon-icon.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="be/style.css">
    <link rel="stylesheet" href="be/css/my.css">
    @yield('style')
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/responsive.css">
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.7/jq-3.2.1/dt-1.10.16/datatables.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="pd80">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="http://ieg.vn" target="_blank"><img class="main-logo" src="be/img/logo.png"
                                alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area" style="left: 0px">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        
                            <div class="menu-switcher-pro">
                                <div class="logo-pro">
                                    <a href="http://ieg.vn" target="_blank"><img class="main-logo" style="width: 100%" src="be/img/logo.png"
                                            alt="" /></a>
                                </div>
                            </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row" style="text-align: center">
                                    <h2>IEG - School Partner<br>Lesson plan {{$teacher->fullname}}s</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="library-book-area mg-t-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="single-cards-item">
                                <div class="single-product-image">
                                    <a href="#"><img src="be/img/product/profile-bg.jpg" alt=""></a>
                                </div>
                                <div class="single-product-text">
                                    <img src="upload/teachers/{{$teacher->image}}" alt="">
                                    <h4>{{$teacher->fullname}}</h4>
                                    <h5>{{$teacher->coso->name}}</h5>
                                    {{-- <a class="follow-cards" href="#">Follow</a> --}}
                                    <div class="profile-details-hr">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                <div class="address-hr">
                                                    <p><b>Email ID</b><br />{{$teacher->email}}</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                                    <p><b>Phone</b><br />{{$teacher->mobile}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="address-hr">
                                                    <p><b>Address</b><br /> {{$teacher->address}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <div class="address-hr">
                                                    <a href="{{$teacher->facebook}}" target="_blank"><i
                                                            class="fa fa-facebook"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <div class="address-hr">
                                                    <a href="{{$teacher->twitter}}" target="_blank"><i
                                                            class="fa fa-twitter"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <div class="address-hr">
                                                    <a href="mailto:{{$teacher->email}}"><i
                                                            class="fa fa-google-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                            <div class="single-review-st-item res-mg-t-30 table-mg-t-pro-n">
                                <div class="single-review-st-hd">
                                    {{-- <h2>Upload lesson plan</h2> --}}
                                </div>
                                <div class="row">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>File</th>
                                                <th>Note</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($lps as $lp)
                                            <tr>
                                                <td>
                                                    {{$lp->id}}
                                                </td>
                                                <td>
                                                    {{$lp->title}}
                                                </td>
                                                <td>
                                                    <a class="Warning Warning-color mg-b-10" target="_blank"
                                                        href="{{route('school_preview', [$teacher->id, $lp->id])}}">{{$lp->file}}</a>
                                                </td>
                                                <td>
                                                    {{$lp->note}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>File</th>
                                                <th>Note</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <script>
                                        $(document).ready(function() {
                                        $('#example').DataTable();
                                    } );
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="footer-copyright-area" style="background: #114275">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2020. All rights reserved. <a
                                    href="https://ieg.vn">Template by IEG</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>