<!DOCTYPE html>
<html>

<head>
    <title>Laravel 5.7 Import Export Excel to database Example - ItSolutionStuff.com</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>

<body>

    <div class="container">
        <div class="card bg-light mt-3">
            <div class="card-header">
                A ka đê mích !!!
            </div>
            
@if(session('msg'))
<div class="alert alert-success alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ session('msg') }}
</div>
@endif
<form action="{{route('export')}}" method="get"
    enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-8 col-md-8 col-md-offset-2 col-sm-8 col-xs-12">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group "
                    id="data_5">
                    <label>Range select (mm/dd/yyyy)</label>
                    <div class="input-daterange input-group" id="datepicker">
                        <input type="text" class="form-control" name="start"
                            value="{{date('m/d/Y')}}" />
                        <span class="input-group-addon">to</span>
                        <input type="text" class="form-control" name="end"
                            value="{{date('m/d/Y')}}" />
                    </div>
                </div>
            </div>
            <button type="submit"
                class="btn btn-primary waves-effect waves-light">Submit</button>
        </div>
    </div>
</form>
            <div class="card-body">
                import schedules
                <form action="{{ route('schedulesimport') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import User Data</button>
                    <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
                </form>
            </div>
            
            <div class="card-body">
                import session
                <form action="{{ route('sessionimport') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import User Data</button>
                    <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
                </form>
            </div>
            <div class="card-body">
                import user
                <form action="{{ route('userimport') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import User Data</button>
                </form>
            </div>
            <div class="card-body">
                import subject
                <form action="{{ route('subjectimport') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import subject Data</button>
                </form>
            </div>
            <div class="card-body">
                import teachers
                <form action="{{ route('teacherimport') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Import subject Data</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>