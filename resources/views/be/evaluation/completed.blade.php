@extends('be/layouts/index')
@section('title')
Evaluation Completed
@endsection
@section('style')

<style>
    #customers {
        border-collapse: collapse;
        width: 100%;
        text-align: center;
        /* width: 50%; */
    }

    #customers td,
    #customers th {
        border: 1px solid #00486e;
        padding: 8px;
    }


    .solid {
        border: 1px solid #00486e;
        padding: 10px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #00486e;
        color: white;
    }

    .b_ddd {
        border: 1px solid #ddd;
        padding: 5px;
    }

    .p_top10 {
        padding-top: 10px;
    }

    .p_top5 {
        padding-top: 5px;
    }

    .pd10 {
        padding: 30px;
    }
</style>
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
                                <li><span class="bread-blod">Accordion</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- accordion start-->
<div class="edu-accordion-area mg-b-15">
    <div class="container-fluid">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-md-offset-1">
            <div class="row pd10">
                <div class="admin-pro-accordion-wrap shadow-inner responsive-mg-b-30">
                    <div class="panel-group edu-custon-design" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading accordion-head" style="text-align:center;">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                        COMPLETED</a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse panel-ic collapse in">
                                <div class="panel-body admin-panel-content animated bounce">
                                    <div class="row">
                                        <table id="customers">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Location</th>
                                                    <th>Teacher</th>
                                                    <th>Class</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($evaluations as $evaluation)
                                                {{-- @if ($evaluation->status == 1) --}}
                                                <tr>
                                                    <td>{{$evaluation->id}}</td>
                                                    <td>{{$evaluation->location->name}}</td>
                                                    <td>{{$evaluation->teacher->fullname}}</td>
                                                    <td>{{$evaluation->schedule->class}}</td>
                                                    <td>
                                                        {{$total =  
                                                        array_sum($evaluation->part1['p1_1']) + array_sum($evaluation->part1['p1_2'])+
                                                        array_sum($evaluation->part2a['p2a1'])+array_sum($evaluation->part2a['p2a2'])+array_sum($evaluation->part2a['p2a3'])+
                                                        array_sum($evaluation->part2b['p2b1'])+array_sum($evaluation->part2b['p2b2'])+
                                                        array_sum($evaluation->part2c['p2c1'])+array_sum($evaluation->part2c['p2c2'])+array_sum($evaluation->part2c['p2c3'])+
                                                        array_sum($evaluation->part2d['p2d1'])+array_sum($evaluation->part2d['p2d2'])+
                                                        array_sum($evaluation->part3a['p3a1'])+array_sum($evaluation->part3a['p3a2'])+array_sum($evaluation->part3a['p3a3'])+array_sum($evaluation->part3a['p3a4'])+
                                                        array_sum($evaluation->part3b['p3b1'])+array_sum($evaluation->part3b['p3b2'])+
                                                        array_sum($evaluation->part3c['p3c1'])+array_sum($evaluation->part3c['p3c2'])+
                                                        array_sum($evaluation->part3d['p3d1'])+array_sum($evaluation->part3d['p3d2'])+
                                                        array_sum($evaluation->part4a['p4a1'])+array_sum($evaluation->part4a['p4a2'])
                                                                    }}

                                                        {{-- {{$total =  array_sum($evaluation->part2a['p2a1']) + array_sum($evaluation->part2a['p2a2'])+
                                                                    array_sum($evaluation->part2a['p2a3'])+
                                                                    array_sum($evaluation->part2b['p2b1']) + array_sum($evaluation->part2b['p2b2'])+
                                                                    array_sum($evaluation->part2c['p2c'])+
                                                                    array_sum($evaluation->part2d['p2d1']) + array_sum($evaluation->part2d['p2d2'])+
                                                                    array_sum($evaluation->part3a['p3a1']) + array_sum($evaluation->part3a['p3a2'])+
                                                                    array_sum($evaluation->part3a['p3a3']) + array_sum($evaluation->part3a['p3a4'])+
                                                                    array_sum($evaluation->part3b['p3b1']) + array_sum($evaluation->part3b['p3b2'])+
                                                                    array_sum($evaluation->part3c['p3c1']) + array_sum($evaluation->part3c['p3c2'])+
                                                                    array_sum($evaluation->part3d['p3d1']) + array_sum($evaluation->part3d['p3d2'])+
                                                                    array_sum($evaluation->part4a['p4a1']) + array_sum($evaluation->part4a['p4a2'])+
                                                                    array_sum($evaluation->part4b['p4b']) +
                                                                    array_sum($evaluation->part4c['p4c'])
                                                                    }} --}}
                                                    </td>
                                                    <td>
                                                        <a href="/admin/evaluation/view/{{$evaluation->id}}"
                                                            data-toggle="tooltip" title="Draft" class="pd-setting-ed"><i
                                                                class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            info</a>
                                                    </td>
                                                </tr>
                                                {{-- @endif --}}
                                                @empty
                                                <tr>
                                                    <td>No data found !</td>
                                                </tr>
                                                @endforelse
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
@endsection