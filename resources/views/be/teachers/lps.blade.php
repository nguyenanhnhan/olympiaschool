@extends('be/layouts/index')
@section('title')
Index
@endsection
@section('style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<!-- Bootstrap CSS
		============================================ -->
<link rel="stylesheet" href="be/css/bootstrap.min.css">
<!-- modals CSS
		============================================ -->
<link rel="stylesheet" href="be/css/modals.css">
<!-- style CSS
		============================================ -->
<link rel="stylesheet" href="be/style.css">
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
                    <div class="row" style="text-align: center">

                        <h2>IEG - School Partner<br>Lesson plan 
                            {{$teacher->fullname}}</h2>
                            <h5>{{$teacher->coso->name}}</h5>
                            
                        <img src="upload/teachers/{{$teacher->image}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="library-book-area mg-t-30">
    <div class="container-fluid">
        <div class="row">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>File</th>
                        <th>Note</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lps as $lp)
                    <tr>
                        <td>
                            {{$lp->id}}
                        </td>
                        <td>
                            {{$lp->title}}
                        </td>
                        <td>
                            <a class="Warning Warning-color mg-b-10" target="_blank" href="{{route('teacher_view_lps', [$teacher->id, $lp->id])}}">{{$lp->file}}</a>
                        </td>
                        <td>
                            {{$lp->note}}
                        </td>
                        <td>
                            <a href="{{route('destroy-lp', $lp->id)}}">DELETE</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>File</th>
                        <th>Note</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@endsection
@section('script2')
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<!-- jquery
		============================================ -->
<script src="be/js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
        ============================================ -->
<script src="be/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
@endsection