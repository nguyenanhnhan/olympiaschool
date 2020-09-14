<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | academic</title>
    <base href="{{asset('')}}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/font-awesome.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="be/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="be/css/responsive.css">
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="error-pagewrap">
        <div class="error-page-int">

            @if(session('msg'))
            <div class="alert alert-danger alert-dismissible fade in">
                {{ session('msg') }}
            </div>
            @endif
            <div class="text-center m-b-md custom-login">
              <h2>WELCOME TO ...</h2>
                <h3>PLEASE SELECT YOUR SCHOOL</h3>
            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{route('school_selected')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <select name="school" id="" class="form-control">
                                    @foreach ($addresses as $address)
                                    <option value="{{$address->id}}">{{$address->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="submit" class="btn btn-success btn-block loginbtn" value="Select">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>