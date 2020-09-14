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
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs-3.3.7/jq-3.2.1/dt-1.10.16/datatables.min.css" />
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
    <style>
        .p-0-80 {
            padding: 0 80px;
        }

        #footer {
            background-color: #114275;
            position: fixed;
            bottom: 0px;
            left: 0px;
            right: 0px;
            height: 80px;
            margin-bottom: 0px;
            text-align: center;
        }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="p-0-80">
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
                                                <a href="http://ieg.vn" target="_blank"><img class="main-logo"
                                                        style="width: 100%" src="be/img/logo.png" alt="" /></a>
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

                                    <h2>Preview Lesson plan</h2>
                                    <h3>{{$lp->title}}</h3>
                                    {{$lp->file}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="library-book-area mg-t-30">
                <div class="container-fluid">
                    <div class="row">
                        @if ($lp->extension == 'pdf')
                        <embed width="100%" height="1000px"
                            src="upload/lesson_plans/{{$teacher->fullname}}/{{$lp->file}}" type="">
                        @elseif($lp->extension == 'docx')
                        <iframe id="excel-iframe" style="position: relative"
                            src='https://view.officeapps.live.com/op/embed.aspx?src=https://sp.ieg.vn/upload/lesson_plans/{{$teacher->fullname}}/{{$lp->file}}'
                            width='100%' height='1000px' frameborder='0'> </iframe>
                        {{-- <iframe width="100%" height="1000px" id="iframe" src="https://docs.google.com/gview?url=https://sp.ieg.vn/upload/lesson_plans/{{$teacher->fullname}}/{{$lp->file}}preview&embedded=true"
                        frameborder="0"></iframe> --}}
                        @elseif($lp->extension == 'xlsx')
                        <iframe toolbar=0
                            src='https://view.officeapps.live.com/op/embed.aspx?src=https://sp.ieg.vn/upload/lesson_plans/{{$teacher->fullname}}/{{$lp->file}}'
                            width='100%' height='1000px' frameborder='0'> </iframe>
                        @elseif($lp->extension == 'png' || $lp->extension == 'jpg')
                        <img src="upload/lesson_plans/{{$teacher->fullname}}/{{$lp->file}}" width="100%" height="auto"
                            alt="">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    {{-- <p>Copyright © 2020. All rights reserved. <a href="https://ieg.vn">Template by IEG</a></p> --}}
                    <img class="main-logo" src="be/img/logo2.png" width="10%" style="padding-top: 10px;" alt="" />
                </div>
            </div>
        </div>
    </div>
</body>

</html>