@extends('teachers/layouts/index')
@section('title')
Preview
@endsection
@section('style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<!-- Bootstrap CSS
		============================================ -->
<link rel="stylesheet" href="be/css/bootstrap.min.css">
<!-- modals CSS
		============================================ -->
<link rel="stylesheet" href="be/css/modals.css">
<!-- style CSS
		============================================ -->
<link rel="stylesheet" href="be/style.css">
@endsection
@section('content')
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
            <embed width="100%" height="1000px" src="upload/lesson_plans/{{$teacher->fullname}}/{{$lp->file}}" type="">
            @elseif($lp->extension == 'docx')
            <iframe width="100%" height="1000px"
                src='https://view.officeapps.live.com/op/embed.aspx?src={{url('/')}}/upload/lesson_plans/{{$teacher->fullname}}/{{$lp->file}}'
                width='100%' height='100%' frameborder='0'>This is an embedded <a target='_blank'
                    href='http://office.com'>Microsoft Office</a> document, powered by <a target='_blank'
                    href='http://office.com/webapps'>Office Online</a>.</iframe>
            @elseif($lp->extension == 'xlsx')
            <iframe src='https://view.officeapps.live.com/op/embed.aspx?src={{url('/')}}/upload/lesson_plans/{{$teacher->fullname}}/{{$lp->file}}' width='100%'
                height='565px' frameborder='0'> </iframe>
                @elseif($lp->extension == 'png' || $lp->extension == 'jpg')
                <img src="upload/lesson_plans/{{$teacher->fullname}}/{{$lp->file}}" width="100%" height="auto" alt="">
            @endif
        </div>
    </div>
</div>
@endsection
@section('script2')
<!-- jquery
		============================================ -->
<script src="be/js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
        ============================================ -->
<script src="be/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
@endsection