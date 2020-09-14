@extends('be/layouts/index')
@section('title')
Evaluation
@endsection
@section('style')
<style>
    #customers {
        border-collapse: collapse;
        width: 100%;
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
                                <li><span class="bread-blod">Evaluate</span>
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
<!-- accordion start-->
<div class="edu-accordion-area mg-b-15">
    <div class="container-fluid">
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-md-offset-1 solid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="tab-content-details mg-b-30">
                        <h2>Evaluationn</h2>
                    </div>
                    <div class="tab-content-details mg-b-30">
                        <h3>{{$schedule->teacher->fullname}} / {{$schedule->location->name}}</h3>
                    </div>
                </div>
            </div>
            <form action="{{route('evaluation_save')}}" method="post">
                {{ csrf_field() }}
                <input type="text" name="schedule" hidden value="{{$schedule->id}}">
                <div class="row pd10">
                    <div class="admin-pro-accordion-wrap shadow-inner responsive-mg-b-30">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right pull-right-pro">Content:</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                            <input type="text" name="content" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right pull-right-pro">Objective:</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                            <input type="text" name="objective" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right pull-right-pro">Comment:</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                            <textarea name="comment" cols="40" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-group edu-custon-design" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-head">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                            PART 1 - PRE-REQUISITES</a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse panel-ic collapse in">
                                    <div class="panel-body admin-panel-content animated bounce">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="i-checks pull-left">
                                                    <label>Teacher is professional and shows respect to all
                                                        learners.</label> <br>
                                                    <label>Teacher displays solid knowledge of the subject.</label>
                                                </div>
                                                <div class="i-checks pull-right">
                                                    <input type="checkbox" value=""> <br>
                                                    <input type="checkbox" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Part2-->
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-head">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
                                            PART 2 - CLASSROOM ENVIRONMENT <></a>
                                    </h4>
                                </div>
                                <div id="collapse9" class="panel-collapse panel-ic collapse">
                                    <div class="panel-body admin-panel-content animated bounce">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 b_ddd">
                                                <div class="row">
                                                    <label class="i-checks pull-left">2A.1. Space</label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="i-checks pull-left">
                                                            <label>Basic (x1)</label> <br>
                                                            <label>Approaching (x2)</label>
                                                        </div>
                                                        <div class="i-checks pull-right">
                                                            <input type="checkbox" name="part_2a1_basic" class="Basic"
                                                                value=""> <br>
                                                            <input type="checkbox" name="part_2a1_approaching"
                                                                class="Approaching" id="approaching" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="i-checks pull-left">
                                                            <label>Competent (x3)</label> <br>
                                                            <label>Outstanding (x4)</label>
                                                        </div>
                                                        <div class="i-checks pull-right">
                                                            <input type="checkbox" name="part_2a1_competent" value="">
                                                            <br>
                                                            <input type="checkbox" name="part_2a1_outstanding" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 b_ddd">
                                                <div class="row">
                                                    <label class="i-checks pull-left">2A.2. Materials</label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="i-checks pull-left">
                                                            <label>Basic (x1)</label> <br>
                                                            <label>Approaching (x2)</label>
                                                        </div>
                                                        <div class="i-checks pull-right">
                                                            <input type="checkbox" name="part_2a2_basic" class="Basic"
                                                                value=""> <br>
                                                            <input type="checkbox" name="part_2a2_approaching"
                                                                class="Approaching" id="approaching" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="i-checks pull-left">
                                                            <label>Competent (x3)</label> <br>
                                                            <label>Outstanding (x4)</label>
                                                        </div>
                                                        <div class="i-checks pull-right">
                                                            <input type="checkbox" name="part_2a2_competent" value="">
                                                            <br>
                                                            <input type="checkbox" name="part_2a2_outstanding" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p_top10">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 b_ddd">
                                                <div class="row">
                                                    <label class="i-checks pull-left">2A.3. Procedures</label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="i-checks pull-left">
                                                            <label>Basic (x1)</label> <br>
                                                            <label>Approaching (x2)</label>
                                                        </div>
                                                        <div class="i-checks pull-right">
                                                            <input type="checkbox" name="part_2a3_basic" class="Basic"
                                                                value=""> <br>
                                                            <input type="checkbox" name="part_2a3_approaching"
                                                                class="Approaching" id="approaching" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="i-checks pull-left">
                                                            <label>Competent (x3)</label> <br>
                                                            <label>Outstanding (x4)</label>
                                                        </div>
                                                        <div class="i-checks pull-right">
                                                            <input type="checkbox" name="part_2a3_competent" value="">
                                                            <br>
                                                            <input type="checkbox" name="part_2a3_outstanding" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 b_ddd">
                                                <div class="row">
                                                    <label class="i-checks pull-left">2B.1. Setting & Monitoring
                                                        Rules/Expectations</label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="i-checks pull-left">
                                                            <label>Basic (x1)</label> <br>
                                                            <label>Approaching (x2)</label>
                                                        </div>
                                                        <div class="i-checks pull-right">
                                                            <input type="checkbox" name="part_2b1_basic" class="Basic"
                                                                value=""> <br>
                                                            <input type="checkbox" name="part_2b1_approaching"
                                                                class="Approaching" id="approaching" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="i-checks pull-left">
                                                            <label>Competent (x3)</label> <br>
                                                            <label>Outstanding (x4)</label>
                                                        </div>
                                                        <div class="i-checks pull-right">
                                                            <input type="checkbox" name="part_2b1_competent" value="">
                                                            <br>
                                                            <input type="checkbox" name="part_2b1_outstanding" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p_top10">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 b_ddd">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2B. Managing
                                                                Student Behavior
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2B.1. Setting
                                                                & Monitoring Rules/Expectations</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="account">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2B.2.
                                                                Responding to & Fostering Student Behavior</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="account">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 b_ddd">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2C. Creating
                                                                an Environment of Respect and Rapport
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">Respect &
                                                                Rapport & Caring</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="account">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p_top10">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 b_ddd">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2D. Creating a
                                                                Culture for Learning
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2D.1. Effort &
                                                                Persistence</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="account">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2D.2. Passion
                                                                to Learn</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="account">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 b_ddd">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2D. Creating a
                                                                Culture for Learning
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2D.1. Effort &
                                                                Persistence</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="account">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2D.2. Passion
                                                                to Learn</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="account">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p_top10">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 b_ddd">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2D. Creating a
                                                                Culture for Learning
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2D.1. Effort &
                                                                Persistence</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="account">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2D.2. Passion
                                                                to Learn</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="account">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Part2-->
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-head">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                            PART 2 - CLASSROOM ENVIRONMENT</a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse panel-ic collapse">
                                    <div class="panel-body admin-panel-content animated bounce">
                                        <div class="row p_top10">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 b_ddd">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2A. Managing
                                                                Classroom Space, Materials & Procedures
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row p_top5">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2A.1.
                                                                Space</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_2a1">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p_top5">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2A.2.
                                                                Materials</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_2a2">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p_top5">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2A.3.
                                                                Procedures</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_2a3">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2B. Managing
                                                                Student Behavior
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2B.1. Setting
                                                                & Monitoring Rules/Expectations </label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_2b1">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p_top5">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2B.2.
                                                                Responding to & Fostering Student Behavior</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_2b2">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 b_ddd">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2C. Creating
                                                                an Environment of Respect and Rapport
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">Respect &
                                                                Rapport & Caring</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_2c">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p_top5">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2D. Creating a
                                                                Culture for Learning
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2D.1. Effort &
                                                                Persistence</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_2d1">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p_top5">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">2D.2. Passion
                                                                to Learn</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_2d2">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Part3-->
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-head">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                            PART 3 - INSTRUCTION</a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse panel-ic collapse">
                                    <div class="panel-body admin-panel-content animated bounce">
                                        <div class="row p_top10">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 b_ddd">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">3A.
                                                                Communicating with Students
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row p_top5">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">3A.1. Setting
                                                                Objectives</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_3a1">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p_top5">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">3A.2. Giving
                                                                Instruction</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_3a2">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p_top5">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">3A.3. Content
                                                                Delivery & Clarity</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_3a3">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p_top5">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">3A.4.
                                                                Promoting the Use of English</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_3a4">
                                                                    <option value="2">Basic</option>
                                                                    <option value="6">Approaching</option>
                                                                    <option value="12">Competent</option>
                                                                    <option value="20">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">3B. Engaging
                                                                Students in Learning
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">3B.1. Student
                                                                Engagement</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_3b1">
                                                                    <option value="2">Basic</option>
                                                                    <option value="6">Approaching</option>
                                                                    <option value="12">Competent</option>
                                                                    <option value="20">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p_top5">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">3B.2.
                                                                Scaffolding & Differentiating Instruction</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_3b2">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 b_ddd">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">3C. Using
                                                                Questioning and Discussion Techniques
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">3C.1. Low- &
                                                                High-level Questioning</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_3c1">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p_top5">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">3C.2.
                                                                Discussion</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_3c2">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">3D. Using
                                                                Assessment in Instruction & Feedback
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">3D.1.
                                                                Monitoring of Student Learning with Checks for
                                                                Understanding</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_3d1">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p_top5">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">3D.2. Feedback
                                                                to Students</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_3d2">
                                                                    <option value="3">Basic</option>
                                                                    <option value="9">Approaching</option>
                                                                    <option value="18">Competent</option>
                                                                    <option value="26">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-head">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                            Part 4 - Lesson Planning & Feedback</a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse panel-ic collapse">
                                    <div class="panel-body admin-panel-content animated bounce">
                                        <div class="row p_top10">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 b_ddd">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">4A. Lesson
                                                                Planning
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row p_top5">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">4A.1. Clarity
                                                                & Alignment of Objectives</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_4a1">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p_top5">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">4A.2. Sequence
                                                                & Balance of Objectives</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_4a2">
                                                                    <option value="1">Basic</option>
                                                                    <option value="5">Approaching</option>
                                                                    <option value="11">Competent</option>
                                                                    <option value="19">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 b_ddd">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">4B. Knowledge
                                                                of Content & Pedagogy
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">3C.1. Low- &
                                                                High-level Questioning</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_4b">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">4C. Reflection
                                                                & Receiving Feedback
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <label class="login2 pull-left pull-left-pro">3D.1.
                                                                Monitoring of Student Learning with Checks for
                                                                Understanding</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control custom-select-value"
                                                                    name="part_4c">
                                                                    <option value="1">Basic</option>
                                                                    <option value="3">Approaching</option>
                                                                    <option value="6">Competent</option>
                                                                    <option value="10">Outstanding</option>
                                                                </select>
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
                <div>
                    <input type="submit" value="aaaaa">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
            $("#Approaching").change(function(){
                if($(this).is(":checked"))
                {
                    $(".Basic").prop('checked','checked');
                }
                else
                {
                    $(".Basic").removeAttr('checked','');
                }
            })
        })
</script>
<!-- icheck JS
		============================================ -->
<script src="be/js/icheck/icheck.min.js"></script>
<script src="be/js/icheck/icheck-active.js"></script>
@endsection