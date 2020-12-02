@extends('be/layouts/index')
@section('title')
Schedules
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
                        {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Add Professor</span>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Single pro tab review Start-->
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Observation Plan</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <div class="row">
                                                <div class="row" style="padding-top:50px; overflow-x:auto;">
                                                    <div>
                                                        <table class="table table-striped table-bordered table-hover"
                                                            id="example-table" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr
                                                                    style="color: #fff; text-align: center; background-color: #114275;">
                                                                    <th>Subject</th>
                                                                    <th>Class</th>
                                                                    <th>Teacher</th>
                                                                    {{-- <th>Class</th> --}}
                                                                    <th>Time (dd-mm/yyyy)</th>
                                                                    <th>Session</th>
                                                                    <th>Booking</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody style="text-align:center; line-height: 120px">
                                                                @foreach ($schedules as $book)
                                                                <tr>
                                                                    <td>{{$book->subject->name}}/{{$book->subject->criteria->name}}</td>
                                                                    <td>{{$book->class}}</td>
                                                                    <td>{{$book->teacher->fullname}}</td>
                                                                    <td>{{$book->time1}}</td>
                                                                    <td>{{$book->session->name}}</td>
                                                                    <td>{{$book->user->name}}</td>
                                                                    <td>
                                                                        <a href="{{route('schedule_edit',$book->id)}}">Edit</a>
                                                                        @if ($book->booking == null)
                                                                        /
                                                                        <a href="{{route('schedule_destroy',$book->id)}}">Cancel</a> /
                                                                        <a href="{{route('evaluation_show',$book->id)}}">Evaluate</a>
                                                                        {{-- @else --}}
                                                                            
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
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