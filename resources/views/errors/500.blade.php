<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('assets/css/error500.css') }}" rel="stylesheet" type="text/css">
<link rel="icon" href="{{ asset('assets/img/icon.png') }}" type="image/png">
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css"> 
<!--[if lt IE 9]>
    <script src="{{ asset('assets/js/respond-1.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
    <script src="{{ asset('assets/js/html5element.js') }}"></script>
<![endif]-->
    <title>OOP's</title>
</head>
<body oncontextmenu="return false">
<div class="container">
<div class="row">
    <div class="msgblock circle">
    <h3 class='errmsg noselect text-center'>OOP's Sorry</h3>
    </div>
    <p class="textmsg text-center noselect">It's not you. It's us. :(</p> 
    <p class="text-center noselect textmsg">Please <a href="{{route('home')}}" class="home-link">go to home page</a></p>
    <div class="col-md-8 col-md-push-2">
	{{Html::image('assets/img/500bg.png', '500', ['class'=>'noselect center-block img-responsive'])}}
    </div>
</div>

</body>
</html>
 