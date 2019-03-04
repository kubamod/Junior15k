<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>@yield('title', 'Junior 15k')</title>
</head>
<body>
<div class="container-fluid h-100">
    <div class="row h-100">
        <div class="col-md cv-container">
            <div class="scale-buttons">
                <button type="button" class="btn btn-secondary scale-minus">-20%</button>
                <button type="button" class="btn btn-secondary scale-plus">+20%</button>

            </div>
            @yield('CV')



        </div>
        <div class="col-md-4 right-side center-align">

            {!! Form::open(['route' => 'front.generate-cv', 'class' => 'center-yolo']) !!}

            @include('front.from')

            {!! Form::close() !!}
        </div>
    </div>
</div>

<script>
    $('.scale-minus').click(function () {
        let cv = $('.cv');
        cv.css('height', cv.height() * 0.8);
        cv.css('width', cv.width() * 0.8);
    });

    $('.scale-plus').click(function () {
        let cv = $('.cv');
        cv.css('height', cv.height() * 1.2);
        cv.css('width', cv.width() * 1.2);
    });
</script>
</body>
</html>

