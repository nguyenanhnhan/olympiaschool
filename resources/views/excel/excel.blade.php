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