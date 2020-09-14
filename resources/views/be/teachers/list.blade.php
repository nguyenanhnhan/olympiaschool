@extends('be/layouts/index')
@section('title')
list teachers
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
    <style>
        .table-striped>tbody>tr:nth-child(odd)>td,
        .table-striped>tbody>tr:nth-child(odd)>th {
            background-color: #d3e1ff;
        }

        .table-striped>tbody>tr:nth-child(even)>td,
        .table-striped>tbody>tr:nth-child(even)>th {
            background-color: #fff;
        }

        .table-bordered>tbody>tr>td {
            border: 1px solid #0000 !important;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>List teacher</h1>
                        </div>
                    </div>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Fullname</th>
                                <th>Image</th>
                                <th>Info</th>
                                <th>Email</th>
                                <th>Lesson plans</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $teacher)
                            <tr>
                                <td>{{$teacher->id}} {{$teacher->coso->name}}</td>
                                <td>{{$teacher->fullname}}</td>
                                <td><img width="100px" src="upload/teachers/{{$teacher->image}}" alt=""></td>
                                <td>{{$teacher->address}} <br>{{$teacher->mobile}}</td>
                                <td>{{$teacher->email}}</td>
                                <td><a href="{{route('teacher_lps', $teacher->id)}}" target="_blank"
                                        rel="noopener noreferrer">Lesson plans</a></td>
                                <td>
                                    <a href="/admin/teachers/edit/{{$teacher->id}}" data-toggle="tooltip" title="Trash"
                                        class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        info</a><br>
                                    <a href="/admin/teachers/delete/{{$teacher->id}}" data-toggle="tooltip"
                                        title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o"
                                            aria-hidden="true"></i> delete </a></td>
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
        </div>
    </div>
</div>
<!-- Static Table End -->
@endsection