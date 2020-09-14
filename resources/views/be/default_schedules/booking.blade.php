@extends('be/layouts/index')
@section('title')
Booking Schedule
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
                                <li><span class="bread-blod">Schedule</span>
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
                                            <form action="{{route('default_result_booking')}}" method="POST"
                                                enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="form-group">
                                                            <select name="location" id="location" class="form-control">
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
                                                            <select name="teacher" id="teacher" class="form-control">
                                                                <option value="none" selected="" hidden disabled="">
                                                                    Select
                                                                    Tearcher</option>
                                                                @foreach ($teachers as $teacher)
                                                                <option value="{{$teacher->id}}">
                                                                    {{$teacher->fullname}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="form-group">
                                                            <select name="day_id" class="form-control">
                                                                <option value="none" selected="" hidden disabled="">
                                                                    Select day</option>
                                                                @foreach ($days as $day)
                                                                <option value="{{$day->id}}">
                                                                    {{$day->name}}
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
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    @if (isset($booking))
                                                    <div class="row" style="padding-top:50px;">
                                                        <div>
                                                            <table id="example"
                                                                class="table table-striped table-bordered"
                                                                style="width:100%">
                                                                <thead>
                                                                    <tr
                                                                        style="color: #fff; text-align: center; background-color: #114275;">
                                                                        <th>Location</th>
                                                                        <th>Teacher</th>
                                                                        <th>Day</th>
                                                                        <th>Class</th>
                                                                        <th>Session</th>
                                                                        <th>Booking</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody style="text-align:center; line-height: 120px">
                                                                    @foreach ($booking as $book)
                                                                    <tr>
                                                                        <td>{{$book->teacher->coso->name}}</td>
                                                                        <td>{{$book->teacher->fullname}}</td>
                                                                        <td>{{$book->day->name}}</td>
                                                                        <td>{{$book->dclass}}</td>
                                                                        <td>{{$book->session->name}}
                                                                            {{$book->session->time}} </td>
                                                                        <td>
                                                                            @if ($book->booking == null)

                                                                            <form action="{{route('schedule_booking')}}"
                                                                                method="post">
                                                                                {{ csrf_field() }}
                                                                                <input type="text" hidden
                                                                                    name="id_location"
                                                                                    value="{{$book->teacher->coso->id}}">
                                                                                <input type="text" hidden name="day"
                                                                                    value="{{$book->day->name}}">
                                                                                <input type="text" hidden
                                                                                    name="id_teacher"
                                                                                    value="{{$book->teacher->id}}">
                                                                                <input type="text" hidden name="session"
                                                                                    value="{{$book->session->time}}">
                                                                                <input type="text" hidden name="class"
                                                                                    value="{{$book->dclass}}">
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
                                                            <script>
                                                                $(document).ready(function() {
                                                                        $('#example').DataTable();
                                                                    } );
                                                            </script>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="row">
                                                        <table id="example" class="table table-striped table-bordered"
                                                            style="width:100%">
                                                            <thead>
                                                                <tr
                                                                    style="color: #fff; text-align: center; background-color: #114275;">
                                                                    <th></th>
                                                                    <th>ID</th>
                                                                    <th>Location</th>
                                                                    <th>Teacher</th>
                                                                    <th>Day</th>
                                                                    <th>session</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($defaultschedule as $schedule)
                                                                <tr>
                                                                    <td></td>
                                                                    <td>{{$schedule->id}}</td>
                                                                    <td>{{$schedule->teacher->coso->name}}</td>
                                                                    {{-- <td>{{$schedule->location->name}}</td> --}}
                                                                    <td>{{$schedule->teacher->fullname}}</td>
                                                                    <td>{{$schedule->day->name}}</td>
                                                                    <td>{{$schedule->session->name}}:
                                                                        {{$schedule->session->time}}</td>
                                                                    <td>
                                                                        @if ($schedule->booking == null)
                                                                        <form action="{{route('schedule_booking')}}"
                                                                            method="post">
                                                                            {{ csrf_field() }}
                                                                            <input type="text" hidden name="id_location"
                                                                                value="{{$schedule->teacher->coso->id}}">
                                                                            <input type="text" hidden name="day"
                                                                                value="{{$schedule->day->name}}">
                                                                            <input type="text" hidden name="id_teacher"
                                                                                value="{{$schedule->teacher->id}}">
                                                                            <input type="text" hidden name="session"
                                                                                value="{{$schedule->session->time}}">
                                                                            <input type="text" hidden name="class"
                                                                                value="{{$schedule->dclass}}">
                                                                            <input type="submit" class="submit-btn"
                                                                                value="Booking">
                                                                        </form>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        <script>
                                                            $(document).ready(function() {
                                                                    $('#example').DataTable();
                                                                } );
                                                        </script>
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
<script>
    $(document).ready(function () {
        $("#location").change(function(){
            var id_location = $(this).val();
            // alert(id_location);
            $.get("admin/ajax/location/"+id_location, function(data){
                $("#teacher").html(data);
            });
        });
    });
</script>
@endsection