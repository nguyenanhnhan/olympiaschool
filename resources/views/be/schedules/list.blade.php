@extends('be/layouts/index')
@section('title')
list schedules
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
                                <li><span class="bread-blod">Data Table</span>
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
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>List schedule</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control dt-tb">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                                data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true"
                                data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">ID</th>
                                        <th data-field="fullname" data-editable="true">Location</th>
                                        <th data-field="image" data-editable="false">Teacher</th>
                                        <th data-field="info" data-editable="false">Class</th>
                                        <th data-field="email" data-editable="true">Date/Time</th>
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
                                        <td>{{date('D', strtotime($schedule->time1))}}/{{$schedule->time1}}</td>
                                        <td>
                                            <a href="/admin/schedules/edit/{{$schedule->id}}" data-toggle="tooltip"
                                                title="Trash" class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                                    aria-hidden="true"></i> info</a><br>
                                            <a href="/admin/schedules/delete/{{$schedule->id}}" data-toggle="tooltip"
                                                title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o"
                                                    aria-hidden="true"></i> delete </a></td>
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
<!-- Static Table End -->
@endsection