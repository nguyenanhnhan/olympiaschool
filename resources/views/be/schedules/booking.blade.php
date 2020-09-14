@extends('be/layouts/index')
@section('title')
add new teacher
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
                                <li><span class="bread-blod">Add Professor</span>
                                </li>
                            </ul>
                        </div>
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
                        <li class="active"><a href="#description">Schedule</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <form action="{{route('result_booking')}}" method="POST"
                                                enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="form-group">
                                                            <select name="id_location" class="form-control">
                                                                <option value="none" selected="" hidden disabled="">
                                                                    Select
                                                                    Address</option>
                                                                @foreach ($addresses as $address)
                                                                <option value="{{$address->id}}">{{$address->name}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="form-group">
                                                            <select name="id_teacher" class="form-control">
                                                                <option value="none" selected="" hidden disabled="">
                                                                    Select
                                                                    Tearcher</option>
                                                                @foreach ($teachers as $tearcher)
                                                                <option value="{{$tearcher->id}}">
                                                                    {{$tearcher->fullname}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="form-group">
                                                            <select name="day" class="form-control">
                                                                <option value="none" selected="" hidden disabled="">
                                                                    Select Day</option>
                                                                <option value="Mon">Mon</option>
                                                                <option value="Tue">Tue</option>
                                                                <option value="Wed">Wed</option>
                                                                <option value="Thu">Thu</option>
                                                                <option value="Fri">Fri</option>
                                                                <option value="Sat">Sat</option>
                                                                <option value="Sun">Sun</option>
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
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    @if (isset($booking))
                                                    <div class="row" style="padding-top:50px;">
                                                        <div>
                                                            <table
                                                                class="table table-striped table-bordered table-hover"
                                                                id="example-table" cellspacing="0" width="100%">
                                                                <thead>
                                                                    <tr
                                                                        style="color: #fff; text-align: center; background-color: #114275;">
                                                                        <th>Location</th>
                                                                        <th>Teacher</th>
                                                                        <th>Class</th>
                                                                        <th>Time</th>
                                                                        {{-- <th>Status</th> --}}
                                                                        <th>Booking</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody style="text-align:center; line-height: 120px">
                                                                    @foreach ($booking as $book)
                                                                    <tr>
                                                                        <td>{{$book->location->name}}</td>
                                                                        <td>{{$book->teacher->fullname}}</td>
                                                                        <td>{{$book->class}}</td>
                                                                        <td>{{date('D', strtotime($book->time1))}} /
                                                                            {{$book->time1}}</td>
                                                                        {{-- <td>{{$book->status}}</td> --}}
                                                                        <td>
                                                                            @if ($book->booking == null)
                                                                            <form action="admin/schedules/add_booking"
                                                                                method="post">
                                                                                {{ csrf_field() }}
                                                                                <input type="text" hidden name="id"
                                                                                    value="{{$book->id}}" id="">
                                                                                <input type="submit" class="submit-btn"
                                                                                    value="Booking">
                                                                            </form>
                                                                            @else

                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    @else

                                                    <div class="row">
                                                        <table id="table" data-toggle="table" data-pagination="true"
                                                            data-search="true" data-show-columns="true"
                                                            data-show-pagination-switch="true" data-show-refresh="true"
                                                            data-key-events="true" data-show-toggle="true"
                                                            data-resizable="true" data-cookie="true"
                                                            data-cookie-id-table="saveId" data-show-export="false"
                                                            data-click-to-select="true" data-toolbar="#toolbar">
                                                            <thead>
                                                                <tr>
                                                                    <th data-field="state" data-checkbox="true"></th>
                                                                    <th data-field="id">ID</th>
                                                                    <th data-field="fullname" data-editable="true">
                                                                        Location</th>
                                                                    <th data-field="image" data-editable="false">Teacher
                                                                    </th>
                                                                    <th data-field="info" data-editable="false">Class
                                                                    </th>
                                                                    <th data-field="email" data-editable="true">
                                                                        Date/Time</th>
                                                                    <th data-field="action">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($schedules as $schedule)
                                                                <tr>
                                                                    <td></td>
                                                                    <td>{{$schedule->id}}</td>
                                                                    <td>{{$schedule->location->name}}</td>
                                                                    <td>{{$schedule->teacher->fullname}}</td>
                                                                    <td>{{$schedule->class}}</td>
                                                                    <td>{{date('D', strtotime($schedule->time1))}}/{{$schedule->time1}}
                                                                    </td>
                                                                    <td>
                                                                        @if ($schedule->booking == null)
                                                                        <form action="admin/schedules/add_booking"
                                                                            method="post">
                                                                            {{ csrf_field() }}
                                                                            <input type="text" hidden name="id"
                                                                                value="{{$schedule->id}}" id="">
                                                                            <input type="submit" class="submit-btn"
                                                                                value="Booking">
                                                                        </form>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    @endif
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