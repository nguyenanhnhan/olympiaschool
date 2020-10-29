@extends('be/layouts/index')
@section('title')
Search
@endsection
@section('content')
<!-- Single pro tab review Start-->
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Trungbinh</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <form action="{{route('ranking_result')}}" method="POST"
                                                enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-md-offset-4 col-sm-4 col-xs-12">
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
                                                    @if (isset($ranking))
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
                                                                        <th>2a</th>
                                                                        <th>2b</th>
                                                                        <th>2c</th>
                                                                        <th>2d</th>
                                                                        <th>3a</th>
                                                                        <th>3b</th>
                                                                        <th>3c</th>
                                                                        <th>3d</th>
                                                                        <th>4a</th>
                                                                        <th>4b</th>
                                                                        <th>4c</th>
                                                                        {{-- <th>Status</th> --}}
                                                                        <th>total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody style="text-align:center; line-height: 120px">
                                                                    @foreach ($ranking as $rank)
                                                                    <tr>
                                                                        <td>{{$rank->schedule->location->name}} / {{$rank->schedule->class}}</td>
                                                                    <td>{{$rank->teacher->fullname}}</td>
                                                                    <td>{{$p2a = array_sum($rank->part2a['p2a1']) + array_sum($rank->part2a['p2a2']) + array_sum($rank->part2a['p2a3'])}}</td>
                                                                    <td>{{$p2b = array_sum($rank->part2b['p2b1']) + array_sum($rank->part2b['p2b2'])}}</td>
                                                                    <td>{{$p2c = array_sum($rank->part2c['p2c'])}}</td>
                                                                    <td>{{$p2d = array_sum($rank->part2d['p2d1']) + array_sum($rank->part2d['p2d2'])}}</td>
                                                                    <td>{{$p3a = array_sum($rank->part3a['p3a1']) + array_sum($rank->part3a['p3a2']) + array_sum($rank->part3a['p3a3']) + array_sum($rank->part3a['p3a4'])}}</td>
                                                                    <td>{{$p3b = array_sum($rank->part3b['p3b1']) + array_sum($rank->part3b['p3b2'])}}</td>
                                                                    <td>{{$p3c = array_sum($rank->part3c['p3c1']) + array_sum($rank->part3c['p3c2'])}}</td>
                                                                    <td>{{$p3d = array_sum($rank->part3d['p3d1']) + array_sum($rank->part3d['p3d2'])}}</td>
                                                                    <td>{{$p4a = array_sum($rank->part4a['p4a1']) + array_sum($rank->part4a['p4a2'])}}</td>
                                                                    <td>{{$p4b = array_sum($rank->part4b['p4b'])}}</td>
                                                                    <td>{{$p4c = array_sum($rank->part4c['p4c'])}}</td>
                                                                    <td>
                                                                            {{$total1 = $p2a + $p2b + $p2c + $p2d + $p3a + $p3b + $p3c + $p3d + $p4a + $p4b + $p4c}}
                                                                        </td>
                                                                        {{-- <td>{{$book->status}}</td> --}}
                                                                    </tr>
                                                                    @endforeach
                                                                    @php
                                                                        $test = 100;
                                                                    @endphp
                                                                    <tr style="background-color: #a7a7a7">
                                                                        <td colspan="2"><b>trung bình:</b></td>
                                                                    <td>{{$med_p2a = number_format($total_p2a/count($ranking),2)}}</td>
                                                                    <td>{{$med_p2b = number_format($total_p2b/count($ranking),2)}}</td>
                                                                    <td>{{$med_p2c = number_format($p2c/count($ranking),2)}}</td>
                                                                    <td>{{$med_p2d = number_format($total_p2d/count($ranking),2)}}</td>
                                                                    <td>{{$med_p3a = number_format($total_p3a/count($ranking),2)}}</td>
                                                                    <td>{{$med_p3b = number_format($total_p3b/count($ranking),2)}}</td>
                                                                    <td>{{$med_p3c = number_format($total_p3c/count($ranking),2)}}</td>
                                                                    <td>{{$med_p3d = number_format($total_p3d/count($ranking),2)}}</td>
                                                                    <td>{{$med_p4a = number_format($total_p4a/count($ranking),2)}}</td>
                                                                    <td>{{$med_p4b = number_format($total_p4b/count($ranking),2)}}</td>
                                                                    <td>{{$med_p4c = number_format($total_p4c/count($ranking),2)}}</td>
                                                                    <td>{{$med_total = number_format($total/count($ranking),2)}}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="row text-center">
                                                                <b>
                                                                    Ranking: 
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="row" style="padding-top:50px;">
                                                        <div>
                                                            <h3>Ranking</h3>
                                                            <table
                                                                class="table table-striped table-bordered table-hover"
                                                                id="example-table" cellspacing="0" width="100%">
                                                                <thead>
                                                                    <tr style="color: #fff; text-align: center; background-color: #114275;">
                                                                        <th colspan="9" style="text-align: center">Ranking</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody style="text-align:center; line-height: 120px">
                                                                    <tr
                                                                        style=" background-color: #a7d2ff;">
                                                                        <td>2A <br> Ineffective</td>
                                                                        <td>2B <br> Ineffective</td>
                                                                        <td>2C <br> Ineffective</td>
                                                                        <td>2D <br> Ineffective</td>
                                                                        <td>3A <br> Ineffective</td>
                                                                        <td>3B <br> Ineffective</td>
                                                                        <td>3C <br> Ineffective</td>
                                                                        <td>3D <br> Ineffective</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2A.1 <br> Developing</td>
                                                                        <td>2B.1 <br> Developing</td>
                                                                        <td>2C.1 <br> Developing</td>
                                                                        <td>2D.1 <br> Developing</td>
                                                                        <td>3A.1 <br> Developing</td>
                                                                        <td>3B.1 <br> Developing</td>
                                                                        <td>3C.1 <br> Developing</td>
                                                                        <td>3D.1 <br> Developing</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2A.2 <br> Developing</td>
                                                                        <td>2B.2 <br> Developing</td>
                                                                        <td>2C.2 <br> Developing</td>
                                                                        <td>2D.2 <br> Developing</td>
                                                                        <td>3A.2 <br> Developing</td>
                                                                        <td>3B.2 <br> Developing</td>
                                                                        <td>3C.2 <br> Developing</td>
                                                                        <td>3D.2 <br> Developing</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2A.3 <br> Developing</td>
                                                                        <td>2B.3 <br> Developing</td>
                                                                        <td>2C.3 <br> Developing</td>
                                                                        <td>2D.3 <br> Developing</td>
                                                                        <td>3A.3 <br> Developing</td>
                                                                        <td>3B.3 <br> Developing</td>
                                                                        <td>3C.3 <br> Developing</td>
                                                                        <td>3D.3 <br> Developing</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2A.4 <br> Developing</td>
                                                                        <td>2B.4 <br> Developing</td>
                                                                        <td>2C.4 <br> Developing</td>
                                                                        <td>2D.4 <br> Developing</td>
                                                                        <td>3A.4 <br> Developing</td>
                                                                        <td>3B.4 <br> Developing</td>
                                                                        <td>3C.4 <br> Developing</td>
                                                                        <td>3D.4 <br> Developing</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="row">
                                                        <table id="example" class="table table-striped table-bordered"
                                                            style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>ID</th>
                                                                    <th>Teacher
                                                                    </th>
                                                                    <th>Class
                                                                    </th>
                                                                    <th>
                                                                        Date/Time</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($schedules as $schedule)
                                                                <tr>
                                                                    <td></td>
                                                                    <td>{{$schedule->id}}</td>
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
        <!DOCTYPE HTML>
    </div>
</div>
@endsection