@extends('be/layouts/index')
@section('title')
Evaluation Draft
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
                                        DRAFT</a>
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
                                                    <th>Time</th>
                                                    <th>Edit</th>
                                                    <th>Complete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($evaluations as $evaluation)
                                                @if ($evaluation->status == 0)
                                                {{-- @if ($evaluation->status == 0 && $evaluation->author ==Auth::user()->id) --}}
                                                <tr>
                                                    <td>{{$evaluation->id}}</td>
                                                    <td>{{$evaluation->schedule->location->name}}</td>
                                                    <td>{{$evaluation->schedule->teacher->fullname}}</td>
                                                    <td>{{$evaluation->schedule->class}}</td>
                                                    <td>{{$evaluation->schedule->time}}</td>
                                                    <td>
                                                        <a href="/admin/evaluation/edit/{{$evaluation->id}}"
                                                            data-toggle="tooltip" title="Draft" class="pd-setting-ed"><i
                                                                class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            Edit</a>
                                                    </td>
                                                    <td>
                                                        <form action="{{route('completed_evaluation')}}" method="post">
                                                            {{ csrf_field() }}
                                                            <input type="text" hidden name="id"
                                                                value="{{$evaluation->id}}">
                                                            <input type="submit" value="Complete">
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endif
                                                @empty
                                                <tr>
                                                    <td colspan="2" class="text-center">No data found !</td>
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