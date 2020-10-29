@extends('be/layouts/index')
@section('title')
list subjects
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
                            <h1>List subject</h1>
                        </div>
                    </div>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Criteria</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subjects as $subject)
                            <tr>
                                <td>{{$subject->id}}</td>
                                <td>{{$subject->criteria->name}}</td>
                                <td>{{$subject->name}}</td>
                                <td>{{$subject->code_name}}</td>
                                <td>
                                    <a href="{{route('subject_edit', $subject->id)}}" data-toggle="tooltip"
                                        title="Trash" class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                            aria-hidden="true"></i>
                                        Edit</a><br>
                                    <a href="{{route('subject_destroy', $subject->id)}}" data-toggle="tooltip"
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