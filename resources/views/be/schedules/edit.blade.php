@extends('be/layouts/index')
@section('title')
add new admin
@endsection
@section('content')

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Professor Profile</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Add new Schedule</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <form action="{{route('schedule_update', $schedule->id)}}" method="POST"
                                                enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                        <div class="form-group data-custon-pick" id="data_1">
                                                            <div class="input-group date">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-calendar"></i></span>
                                                                <input type="text" class="form-control" name="time1"
                                                                    value="{{date('m/d/Y', strtotime($schedule->time1))}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="id_session" class="form-control">
                                                                <option value="none" selected="" hidden disabled="">
                                                                    Select block/ Chọn block
                                                                </option>
                                                                @foreach ($sessions as $session)
                                                                <option value="{{$session->id}}" 
                                                                    @if ($session->id == $schedule->id_session)
                                                                        selected
                                                                    @endif>
                                                                    {{$session->name}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><div class="form-group">
                                                        <select name="course" class="chosen-select"
                                                            tabindex="-1">
                                                            <option value="none" selected="" hidden disabled="">
                                                                Select class/ Chọn lớp</option>
                                                                @foreach ($courses as $course)
                                                                <option value="{{$course->course_name}}"
                                                                    > {{$course->course_name}}
                                                                </option>
                                                                @endforeach
                                                        </select>
                                                    </div>
                                                        <div class="form-group">
                                                            <select name="id_teacher" class="chosen-select"
                                                                tabindex="-1">
                                                                <option value="none" selected="" hidden disabled="">
                                                                    Select
                                                                    Teacher/ Chọn giáo viên</option>
                                                                @foreach ($teachers as $teacher)
                                                                <option value="{{$teacher->id}}" 
                                                                    @if ($teacher->id == $schedule->id_teacher)
                                                                    selected
                                                                @endif>
                                                                    {{$teacher->first_name}} |
                                                                    {{$teacher->fullname}}({{$teacher->email}})
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="id_subject"
                                                                class="form-control chosen-select">
                                                                <option value="none" selected="" hidden disabled="">
                                                                    Select Subject/ Chọn môn</option>
                                                                @foreach ($subjects as $subject)
                                                                <option value="{{$subject->id}}"
                                                                    @if ($subject->id == $schedule->id_subject)
                                                                    selected
                                                                @endif>
                                                                    {{$subject->name}}/{{$subject->criteria->name}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <button type="submit"
                                                                class="btn btn-primary waves-effect waves-light">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')

<!-- metisMenu JS
		============================================ -->
<script src="be/js/metisMenu/metisMenu.min.js"></script>
<script src="be/js/metisMenu/metisMenu-active.js"></script>
<!-- morrisjs JS
		============================================ -->
<script src="be/js/sparkline/jquery.sparkline.min.js"></script>
<script src="be/js/sparkline/jquery.charts-sparkline.js"></script>
<!-- calendar JS
		============================================ -->
<script src="be/js/calendar/moment.min.js"></script>
<script src="be/js/calendar/fullcalendar.min.js"></script>
<script src="be/js/calendar/fullcalendar-active.js"></script>
<!-- maskedinput JS
		============================================ -->
<script src="be/js/jquery.maskedinput.min.js"></script>
<script src="be/js/masking-active.js"></script>
<!-- datepicker JS
		============================================ -->
<script src="be/js/datepicker/jquery-ui.min.js"></script>
<script src="be/js/datepicker/datepicker-active.js"></script>
<!-- form validate JS
		============================================ -->
<script src="be/js/form-validation/jquery.form.min.js"></script>
<script src="be/js/form-validation/jquery.validate.min.js"></script>
<script src="be/js/form-validation/form-active.js"></script>
<!-- dropzone JS
		============================================ -->
<script src="be/js/dropzone/dropzone.js"></script>
<!-- tab JS
		============================================ -->
<script src="be/js/tab.js"></script>
<!-- plugins JS
		============================================ -->
<script src="be/js/plugins.js"></script>
<!-- main JS
		============================================ -->
<script src="be/js/main.js"></script>
@endsection